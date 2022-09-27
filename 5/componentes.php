<?php 
    class componentes{
        public static function myModal($txtboton, $btncolor,$titulo, $cuerpo, $btncerrar, $btnabrir, $vinculo){
            return
            '
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-' . $btncolor . '" data-bs-toggle="modal" data-bs-target="#exampleModal">
                ' . $txtboton . '
            </button>
    
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog        ">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">' . $titulo . '</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            ' . $cuerpo . '
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">' . $btncerrar . '</button>
                            <a href="' . $vinculo . '" target="_blank"><button type="button" class="btn btn-primary">' . $btnabrir . '</button>
                        </div>
                    </div>
                </div>
            </div>
    
            ';
        }
    }

?>


