<?php 
    $config = get_option('halim_framework'); 
?>
<section class="choose">
    <div class="container">
        <div class="row pt-100 pb-100">
            <div class="col-md-6">
                <?php 
                    if($config['faq_switcher']){
                ?>
                <div class="faq">
                    <div class="page-title">
                        <h4>faq</h4>
                    </div>
                    <div class="accordion" id="accordionExample">
                        <?php 
                            $faq_contents = $config['faq_content'];
                            $i = 0;
                            foreach($faq_contents as $faq_content){
                                $i++;
                        ?>
                        <div class="card">
                            <div class="card-header" id="heading<?php echo $i;?>">
                                <h5 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse"
                                        data-target="#collapse<?php echo $i;?>" aria-expanded="true" aria-controls="collapse<?php echo $i;?>">
                                        <?php echo esc_html($faq_content['faq_title']); ?>
                                    </button>
                                </h5>
                            </div>
                            <div id="collapse<?php echo $i;?>" class="collapse 
                            <?php 
                                if($i == 1){
                                    echo 'show';
                                }
                            ?>
                            " aria-labelledby="heading<?php echo $i;?>"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                <?php echo esc_html($faq_content['faq_des']); ?>
                                </div>
                            </div>
                        </div>
                        <?php
                            }
                        ?>
                    </div>
                </div>
                <?php
                    }
                ?>
            </div>
            <div class="col-md-6">
                <div class="skills">
                    <div class="page-title">
                        <h4>our skills</h4>
                    </div>
                    <?php 
                        $skill_contents = $config['skill_content'];
                        foreach($skill_contents as $skill_content){
                    ?>
                    <div class="single-skill">
                        <h4><?php echo esc_html($skill_content['skill_name']); ?></h4>
                        <div class="progress-bar" role="progressbar" style="width: <?php echo esc_html($skill_content['skill_percentence']); ?>%;" aria-valuenow="25"
                            aria-valuemin="0" aria-valuemax="100"><?php echo esc_html($skill_content['skill_percentence']); ?>%</div>
                    </div>
                    <?php
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>