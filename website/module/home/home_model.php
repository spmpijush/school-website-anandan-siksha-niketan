<?php if ($_SERVER['REQUEST_URI'] == $_SERVER['PHP_SELF']) header("Location: noPage");

class home_model extends Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function getSliderImages()
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

    public function getNotice()
    {
        $sth = $this->db->prepare(
            "SELECT 
                * 
            FROM 
            notice 
            WHERE 
                status=1 
            ORDER BY id DESC LIMIT 10"
        );
        $sth->execute();
        return $sth->fetchAll(PDO::FETCH_ASSOC);
    }


    public function getPageData()
    {
        $sth = $this->db->prepare(
            "SELECT
                page_content
            FROM
                home_page
            WHERE
            is_delete = 0
            LIMIT 1"
        );
        $sth->execute();
        return $sth->fetch(PDO::FETCH_ASSOC);
    }

    public function getHomePageAboutData()
    {
        $sth = $this->db->prepare(
            "SELECT page_content FROM home_page_about"
        );
        $sth->execute();
        return $sth->fetch(PDO::FETCH_ASSOC);
    }

    public function getHeadmasterAboutData()
    {
        $sth = $this->db->prepare(
            "SELECT page_content FROM about_headmaster"
        );
        $sth->execute();
        return $sth->fetch(PDO::FETCH_ASSOC);
    }
    public function getGalleryImage()
    {
        $sth = $this->db->prepare(
            "SELECT 
                * 
            FROM 
            gallery
            ORDER BY id ASC"
        );
        $sth->execute();
        return $sth->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getStaffList()
    {
        $sth = $this->db->prepare(
            "SELECT 
                * 
            FROM 
            staff 
            WHERE 
                active=1 
            ORDER BY sl_staff DESC"
        );
        $sth->execute();
        return $sth->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getSchoolInformation()
    {
        $sth = $this->db->prepare(
            "SELECT 
                * 
            FROM 
            school_information 
            LIMIT 4"
        );
        $sth->execute();
        return $sth->fetch(PDO::FETCH_ASSOC);
    }
}
