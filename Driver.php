<?php 
class Driver extends Worker5
{
    private $experience;
    private $category;

    public function setExperience($experience)
    {
        $this->experience = $experience;
    }

    public function getExperience()
    {
        return $this->experience;
    }

    public function setСategory($category)
    {
        $this->category = $category;
    }

    public function getСategory()
    {  return $this->category;
    }
    }
?>