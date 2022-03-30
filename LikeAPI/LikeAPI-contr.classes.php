<?php 
include ("LikeAPI.classes.php");
class LikeApiContr extends LikeApi{
    private $category;
    private $initialDate;
    private $finalDate;

    public function __construct($category, $initialDate, $finalDate){
        $this->category = $category;
        $this->initialDate = $initialDate;
        $this->finalDate = $finalDate;
    }

    public function reportCategoryC(){
       return $this->reportCategory($this->category, $this->initialDate, $this->finalDate);
    }

    public function reportNoticeC(){
        return $this->reportNotice($this->category, $this->initialDate, $this->finalDate);
    }

    public function reportCategoryCJSON(){
        return json_encode($this->reportCategory($this->category, $this->initialDate, $this->finalDate));
     }
 
     public function reportNoticeCJSON(){
         return json_encode($this->reportNotice($this->category, $this->initialDate, $this->finalDate));
     }
}
?>