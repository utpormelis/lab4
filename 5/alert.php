<?php  
class alert{
    public static function myalert($color,$texto){
    return
        '<br>
        <div class="alert alert-'.$color.'" role="alert">
            '.$texto.'
        </div>';
    }
}
?>
