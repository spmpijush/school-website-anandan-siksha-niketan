<?php if ($_SERVER['REQUEST_URI'] == $_SERVER['PHP_SELF']) header("Location: noPage");

class personalInfoCv_model extends Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function getData()
    {
        $sth = $this->db->prepare(
            "SELECT
                * 
            FROM
                tbl_personal_information
            LIMIT 1"
        );
        $sth->execute();
        return $sth->fetch(PDO::FETCH_ASSOC);
    }
    public function getEducationData()
    {
        $sth = $this->db->prepare(
            "SELECT
                * 
            FROM
                education
            "
        );
        $sth->execute();
        return $sth->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getWorkExperienceData()
    {
        $sth = $this->db->prepare(
            "SELECT
                * 
            FROM
            work_experience
            "
        );
        $sth->execute();
        return $sth->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getSkilsData()
    {
        $sth = $this->db->prepare(
            "SELECT
                * 
            FROM
            tbl_skils
            "
        );
        $sth->execute();
        return $sth->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getGalleryData()
    {
        $sth = $this->db->prepare(
            "SELECT
                * 
            FROM
            tbl_gallery
            WHERE is_delete=0
            LIMIT 3
            "
        );
        $sth->execute();
        return $sth->fetchAll(PDO::FETCH_ASSOC);
    }

    public function update($data = array())
    {
        $getData = $this->getData();

        if (is_array($getData)) {
            return $this->db->update("", "tbl_personal_information", $data, '1');
        } else {
            return $this->db->insert("", "tbl_personal_information", $data);
        }
    }
    public function saveEducationData()
    {
        $data = $_POST;
        $degree = $data['degree'];
        $board_university = $data['board_university'];
        $insititute = $data['insititute'];
        $passing_year = $data['passing_year'];
        $subject = $data['subject'];
        $percentage = $data['percentage'];
        $data += array($degree, $board_university, $insititute, $passing_year, $subject, $percentage);
        return $this->db->insert("", "education", $data);
    }
    public function saveWorkExperienceData()
    {
        $data = $_POST;
        $company = $data['company'];
        $position = $data['position'];
        $start_date = $data['start_date'];
        $end_date = $data['end_date'];
        $description = $data['description'];
        $data += array($company, $position, $start_date, $end_date, $description);
        return $this->db->insert("", "work_experience", $data);
    }
    public function saveSkilsData()
    {
        $data = $_POST;
        $skils_name = $data['skils_name'];
        $skils_percentage = $data['skils_percentage'];
        $data += array($skils_name, $skils_percentage);
        return $this->db->insert("", "tbl_skils", $data);
    }
    public function educationUpdate()
    {
        $data = $_POST;
        $id = $data['id'];
        $name = $data['name'];
        $degree = $data['degree'];
        $description = $data['description'];
        $data += array($id, $name, $degree, $description);
        return $this->db->update("", "doctors", $data, "`id` = '{$id}' ");
    }
}
