<div class="row">
    <div class="col-md-12">
        <?php
            if (have_posts()) :
              while (have_posts()) : the_post();
                ?>
                <div class="row">
                  <div class="col-sm-2">
                    <ul class="list">
                      <li class="list-item"><span class="summary-item"><?= get_avatar( get_the_author_meta( 'ID' ), 62, '', '', ['class'=> 'responsive-img circle'] ); ?></span></li>
                      <li class="list-item"><span class="summary-item"><?php the_author(); ?></span></li>
                      <li class="list-item"><span class="summary-item"><a href="<?= get_the_category()[0]->slug ?>"><?= get_the_category()[0]->name ?></a></span></li>
                      <li class="list-item"><span class="date-text"><?php the_date(); ?></span></li>
                  </ul>
                  </div>
                  <div class="col-sm-10">
                    <ul class="list">
                      <li class="list-item first">
                        <div class="section-heading">
                          <?php
                            if ($singlePage) {
                                echo '<span class="single-title">'.the_title().'</span>';
                            } else {
                                echo '<a href="<?= get_the_permalink() ?>">'. the_title ().'</a>';
                            }
                          ?>
                        </div>
                      </li>
                      <li>
                        <div class="section-content">
                        <?php
                            if ($singlePage) {
                                the_content();
                            } else {
                                the_excerpt();
                                echo '<a href="<?= get_the_permalink() ?>">Read more...</a>';
                            }
                         ?>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
                <hr>
                <?php
              endwhile;
            endif;
          ?>
          
    </div>
</div>