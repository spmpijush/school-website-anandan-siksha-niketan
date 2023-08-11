
<?php if ($_SERVER['REQUEST_URI'] == $_SERVER['PHP_SELF']) header("Location: noPage");

class sliderImageSetup_model extends Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function getList()
    {
        $sth = $this->db->prepare(
            "SELECT 
                * 
            FROM 
                slider_images
            ORDER BY id_slider_images ASC"
        );
        $sth->execute();
        return $sth->fetchAll(PDO::FETCH_ASSOC);
    }

    public function create()
    {
        $data = json_decode(file_get_contents('php://input'), true);

        if (isset($data['file_base64']) && !empty($data['file_base64'])) {
            $file         = trim($data['file_base64']);
            $filebase64   = explode(',', $file);
            $extension    = $filebase64[0];
            $extension    = explode("/", $extension);
            $extension    = rtrim($extension[1], ";");
            $extension    = str_replace(';base64', '', $extension);
            $filebase64   = array_pop($filebase64);
            $filebase64   = str_replace(' ', '+', $filebase64);

            $path         = "../../website/public/uploads/slider/";
            $fileName     = uniqid() . md5(date('Y-m-dH:i:s')) . '.' . $extension;
            $file_save    = base64_decode($filebase64);

            if (!empty($file_save)) {
                if (
                    $extension == 'png'
                    || $extension == 'jpg'
                    || $extension == 'jpeg'
                ) {
                    $this->uploadTimeCompressImage($file_save, 450, 800, $path . $fileName, $extension);
                }
            }
        }

        if (isset($data['file_base64']) && !empty($data['file_base64'])) {
            $data['file'] = $fileName;
        }

        unset($data['file_base64']);
        return $this->db->insert("", "slider_images", $data);
    }

    public function remove()
    {
        $data = json_decode(file_get_contents('php://input'), true);

        $fileToDelete = $this->getFileNameBySl($data['id_slider_images']);

        if (file_exists($fileToDelete['path'] . $fileToDelete['file'])) {
            if (!empty($fileToDelete['file']))
                unlink($fileToDelete['path'] . $fileToDelete['file']);
        }

        return $this->db->delete(
            "",
            "slider_images",
            "`id_slider_images` = '{$data['id_slider_images']}' "
        );
    }

    public function getFileNameBySl($sl = "")
    {
        $sth = $this->db->prepare(
            "SELECT `path`, `file`
            FROM 
                slider_images
            WHERE
                id_slider_images=:sl"
        );
        $sth->execute(array(
            ":sl" => $sl
        ));
        return $sth->fetch(PDO::FETCH_ASSOC);
    }

    public function uploadTimeCompressImage($base64Img, $h, $w, $imageName, $extension)
    {
        // echo $extension."----";
        $im = imagecreatefromstring($base64Img);
        if ($im !== false) {

            $width = imagesx($im);
            $height = imagesy($im);

            $newheight = $h;
            $newwidth = $w;
            // $r = $width / $height; // ratio of image

            // calculating new size for maintain ratio of image
            // if ($w/$h > $r) {
            //     $newwidth = $h*$r; 
            //     $newheight = $h;
            // } else {
            //     $newheight = $w/$r;
            //     $newwidth = $w;
            // }

            $dst = imagecreatetruecolor($newwidth, $newheight);

            if ($extension == 'png') {
                imagealphablending($dst, false);
                imagesavealpha($dst, true);
                $transparent = imagecolorallocatealpha($dst, 255, 255, 255, 127);
                imagefilledrectangle($dst, 0, 0, $newwidth, $newheight, $transparent);
            }

            imagecopyresampled($dst, $im, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);
            imagedestroy($im);

            if ($extension == 'jpg' || $extension == 'jpeg' || $extension == 'JPG')
                imagejpeg($dst, $imageName);
            else if ($extension == 'png')
                imagepng($dst, $imageName);

            imagedestroy($dst);
            //return $imageName;
        } else {
            return "";
        }
    }
}
