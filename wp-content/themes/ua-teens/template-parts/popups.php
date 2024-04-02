<?php

	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}
	?>

<!-- Model Modal -->
<div class="modal model-modal" id="modelModal">
	<div class="modal-dialog">
		<div class="modal-content">

			<!-- Modal Header -->
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">
          <svg xmlns="http://www.w3.org/2000/svg" width="61" height="61" viewBox="0 0 61 61" fill="none">
            <path d="M40.8339 22.8618C41.5783 22.1173 41.5783 20.9104 40.8339 20.1659C40.0895 19.4215 38.8825 19.4215 38.138 20.1659L30.4998 27.8041L22.8616 20.1659C22.1172 19.4215 20.9102 19.4215 20.1658 20.1659C19.4213 20.9104 19.4213 22.1173 20.1658 22.8618L27.804 30.5L20.1657 38.1382C19.4213 38.8827 19.4213 40.0896 20.1657 40.8341C20.9102 41.5785 22.1172 41.5785 22.8616 40.8341L30.4998 33.1958L38.1381 40.8341C38.8825 41.5785 40.0895 41.5785 40.8339 40.8341C41.5783 40.0896 41.5783 38.8827 40.8339 38.1382L33.1957 30.5L40.8339 22.8618Z" fill="white"/>
          </svg>
        </button>
			</div>

			<!-- Modal body -->
			<div class="modal-body">

			</div>
      <div class="form-container">
        <h3 class="block-title upper-title big-title big-margin"><?php echo esc_html( pll__( 'Хочете дізнатись більше?  ' ) ); ?></h3>
        <p class="subtitle small-subtitle"><?php echo esc_html( pll__( 'Надсилайте заявку і наш менеджер звʼяжеться з вами' ) ); ?></p>
        <!--<div id="plumsail-form-72j5"><div class="fd-form-loading"></div></div>-->
        <form method="post" >

        <input type="hidden" name="action" value="form_integration" >
        <input type="hidden" name="site-url" value="<?php echo get_home_url('/');?>">
        <input type="hidden" name="site-lang" value="<?php echo get_bloginfo('language');?>">
        <input type="hidden" name="page-name" value="<?php the_title();?>">

        <div class="form-group">
          <label for="model-field-name"><?php echo esc_html( pll__( 'Ваше Імʼя Прізвище,' ) ); ?></label>
          <input type="text" name="name" class="form-control" id="model-field-name">
        </div>
        <div class="form-group">
          <label for="model-field-birthday"><?php echo esc_html( pll__( 'Дата народження' ) ); ?></label>
          <input type="date" class="form-control birthday" id="model-field-birthday" name="birthday">
          <svg class="piker-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
            <path d="M2.625 20.625C2.625 21.0398 2.96016 21.375 3.375 21.375H20.625C21.0398 21.375 21.375 21.0398 21.375 20.625V10.7812H2.625V20.625ZM20.625 4.3125H16.6875V2.8125C16.6875 2.70937 16.6031 2.625 16.5 2.625H15.1875C15.0844 2.625 15 2.70937 15 2.8125V4.3125H9V2.8125C9 2.70937 8.91563 2.625 8.8125 2.625H7.5C7.39687 2.625 7.3125 2.70937 7.3125 2.8125V4.3125H3.375C2.96016 4.3125 2.625 4.64766 2.625 5.0625V9.1875H21.375V5.0625C21.375 4.64766 21.0398 4.3125 20.625 4.3125Z" fill="#F8F8F8"/>
          </svg>
        </div>
        <div class="form-group">
          <label for="model-field-phone"><?php echo esc_html( pll__( 'Ваш номер телефону' ) ); ?></label>
          <input type="tel" name="phone" class="form-control" id="model-field-phone">
        </div>
        <div class="form-group">
          <label for="model-field-email">Email</label>
          <input type="email" name="email" class="form-control" id="model-field-email">
        </div>
        <button type="submit" class="button orange-btn modification">
		      <?php echo esc_html( pll__( 'Написати' ) ); ?>
          <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
            <path d="M9.5 18L15.5 12L9.5 6" stroke="#F9F9F9"/>
          </svg>
        </button>
        </form>
      </div>

		</div>
	</div>
</div>

<!-- video Modal -->
<div class="modal video-modal" id="videoModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">
          <svg xmlns="http://www.w3.org/2000/svg" width="61" height="61" viewBox="0 0 61 61" fill="none">
            <path d="M40.8339 22.8618C41.5783 22.1173 41.5783 20.9104 40.8339 20.1659C40.0895 19.4215 38.8825 19.4215 38.138 20.1659L30.4998 27.8041L22.8616 20.1659C22.1172 19.4215 20.9102 19.4215 20.1658 20.1659C19.4213 20.9104 19.4213 22.1173 20.1658 22.8618L27.804 30.5L20.1657 38.1382C19.4213 38.8827 19.4213 40.0896 20.1657 40.8341C20.9102 41.5785 22.1172 41.5785 22.8616 40.8341L30.4998 33.1958L38.1381 40.8341C38.8825 41.5785 40.0895 41.5785 40.8339 40.8341C41.5783 40.0896 41.5783 38.8827 40.8339 38.1382L33.1957 30.5L40.8339 22.8618Z" fill="white"/>
          </svg>
        </button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <div class="video">

        </div>
      </div>

    </div>
  </div>
</div>

<!-- Form Modal -->
<div class="modal form-modal" id="formModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">
          <svg xmlns="http://www.w3.org/2000/svg" width="61" height="61" viewBox="0 0 61 61" fill="none">
            <path d="M40.8339 22.8618C41.5783 22.1173 41.5783 20.9104 40.8339 20.1659C40.0895 19.4215 38.8825 19.4215 38.138 20.1659L30.4998 27.8041L22.8616 20.1659C22.1172 19.4215 20.9102 19.4215 20.1658 20.1659C19.4213 20.9104 19.4213 22.1173 20.1658 22.8618L27.804 30.5L20.1657 38.1382C19.4213 38.8827 19.4213 40.0896 20.1657 40.8341C20.9102 41.5785 22.1172 41.5785 22.8616 40.8341L30.4998 33.1958L38.1381 40.8341C38.8825 41.5785 40.0895 41.5785 40.8339 40.8341C41.5783 40.0896 41.5783 38.8827 40.8339 38.1382L33.1957 30.5L40.8339 22.8618Z" fill="white"/>
          </svg>
        </button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <h3><?php echo esc_html( pll__( 'Написати СЕО' ) ); ?></h3>
        <form method="post" >
          <input type="hidden" name="action" value="form_integration" >
          <div class="form-group">
            <label for="seo-field-name"><?php echo esc_html( pll__( 'Ваше Імʼя Прізвище,' ) ); ?></label>
            <input type="text" name="name" class="form-control" id="seo-field-name">
          </div>
          <div class="form-group">
            <label for="seo-field-phone"><?php echo esc_html( pll__( 'Ваш номер телефону' ) ); ?></label>
            <input type="tel" name="phone" class="form-control" id="seo-field-phone">
          </div>
          <div class="form-group textarea-group">
            <label for="seo-field-message"><?php echo esc_html( pll__( 'Напишіть ваш відгук' ) ); ?></label>
            <textarea name="message" class="form-control" id="seo-field-message"></textarea>
          </div>

          <!--<div class="form-group">
            <label for="field-email">Email</label>
            <input type="email" name="email" class="form-control" id="field-email">
          </div>-->
          <button type="submit" class="button orange-btn modification">
	          <?php echo esc_html( pll__( 'Написати' ) ); ?>
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
              <path d="M9.5 18L15.5 12L9.5 6" stroke="#F9F9F9"/>
            </svg>
          </button>
        </form>
      </div>
    </div>
  </div>
</div>

