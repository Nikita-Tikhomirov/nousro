<?php  
	get_header();
?>
<div class="content">
		<!-- 404 -->
		<h1>Ошибка 404</h1>
		<h3>По вашему запросу ничего не найдено.</h3>
		<!-- ./404 -->
	<form action="<?php bloginfo( 'url' ); ?>" method="get">
    <div class="row">
        <div class="col s12" style="font-size:12.5px;">
          <div class="input-field inline">
            <i class="material-icons prefix">search</i>
            <input id="email_inline" type="text" class="validate" name="s">
            <label for="email_inline">Поиск</label>

          </div>
        </div>
    </div>
    </form>
	</div>
<?php
	get_footer();
?>