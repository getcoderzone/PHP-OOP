<?php
include_once("header.php");
?>
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Practice 01</h1>
        </div>
        <?php
            class Person{
                private $prefix;
                private $givenName;
                private $familyName;
                private $suffix;

                /**** Prefix Method ****/
                public function SetPrefix($prefix){
                    $this->prefix = $prefix;
                }
                public function GetPrefix(){
                    return $this->prefix;
                }

                /**** GivenName Method ****/
                public function SetGivenName($givenname){
                    $this->givenName = $givenname;
                }
                public function GetGivenName(){
                    return $this->givenName;
                }

                /**** Family Name Method ****/
                public function SetFamilyName($family){
                    $this->familyName = $family;
                }
                public function GetFamilyName(){
                    return $this->familyName;
                }

                /**** Suffix Name Method ****/
                public function SetSuffixName($suffix){
                    $this->suffix = $suffix;
                }
                public function GetSuffixName(){
                    return $this->suffix;
                }
            }

            $obj = new Person();
            $obj->SetPrefix('Mr.');
            $obj->SetGivenName('Shafiqul');
            $obj->SetFamilyName('SHOPON');
            $obj->SetSuffixName('Islam');

            echo '<h2>Prefix: '.$obj->GetPrefix().'</h2><br/>';
            echo '<h2>Given Name: '.$obj->GetGivenName().'</h2><br/>';
            echo '<h2>Family Name: '.$obj->GetFamilyName().'</h2><br/>';
            echo '<h2>Suffix Name: '.$obj->GetSuffixName().'</h2><br/>';



            class PersonArray{
                public $personInfo = array();

                public function SetPersonName($name){
                    $this->personInfo['name']  = $name;
                }
                public  function SetPersonAge($age){
                    $this->personInfo['age'] = $age;
                }
                public function SetPersonLocation($location){
                    $this->personInfo['location']   = $location;
                }
                public function GetPersonInfo(){
                    return $this->personInfo;
                }
            }
            $objInfo   = new PersonArray();
            $objInfo->SetPersonName('Shafiqul');
            $objInfo->SetPersonAge('28');
            $objInfo->SetPersonLocation('Dhaka');
            /*echo '<pre>';
            print_r($objInfo->GetPersonInfo());
            echo '</pre>';*/

            class PersonInfoAdd extends PersonArray{
                //public $personAddress;
                public function SetAddress($address){
                    $this->personInfo['address'] = $address;
                }
                public function getFullInfo(){
                    return $this->personInfo;
                }
                public function getFullInfoData(){
                    return $this->GetPersonInfo();
                }

            }
            $objFullInfo = new PersonInfoAdd();
            $objFullInfo->SetAddress('Mirpur');

            echo "<pre>";
            print_r($objFullInfo->getFullInfoData());
            echo "</pre>";
            //exit();
        ?>
    </main>
<?php
include_once("footer.php");
?>