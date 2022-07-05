<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="row mb-4">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h5><i class="fa fa-check-double"></i> Persyaratan</h5>
            </div>
            <div class="card-body">
                <div class="accordion" id="accordionExample">
                    <?php
                    if($faqlist){
                        foreach($faqlist as $row){
                            echo '<div class="accordion-item">
                              <h2 class="accordion-header" id="flush-heading'.$row->id_faq.'">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse'.$row->id_faq.'" aria-expanded="false" aria-controls="flush-collapse'.$row->id_faq.'">'.$row->pertanyaan.'</button>
                              </h2>
                              <div id="flush-collapse'.$row->id_faq.'" class="accordion-collapse collapse" aria-labelledby="flush-heading'.$row->id_faq.'" data-bs-parent="#accordionFlushExample">
                              <div class="accordion-body">'.$row->jawaban.'</div>
                              </div>
                            </div>';
                        }
                    } else echo '<p>Tidak ada hasil.</p>';
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
