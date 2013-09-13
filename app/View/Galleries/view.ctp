<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Foto info aanpassen</h4>
			</div>
			<div class="modal-body">
				<img src="#" alt="#" id="modalPicture" class="text-center" style="padding-bottom: 30px; margin: 0 auto; width: 220px; display: block;" />
				<form action="#" id="image-data-form">
					<input type="hidden" name="id" />
					<div class="form-group">
						<input type="text" placeholder="NL" id="modal-nl" name="descr_nl" class="form-control" value="" />
					</div>
					<div class="form-group">
						<input type="text" placeholder="FR" id="modal-fr" name="descr_fr" class="form-control" value="" />
					</div>
					<div class="form-group">
						<input type="text" placeholder="EN" id="modal-en" name="descr_en" class="form-control" value="" />
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default btn-danger pull-left btn-delete-picture">Foto verwijderen</button>
				<button type="button" class="btn btn-default" data-dismiss="modal">Sluiten</button>
				<button type="button" class="btn btn-primary" id="btnSave">Wijzigingen opslaan</button>
			</div>
		</div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<?php echo $this->Html->link('&laquo; Terug naar album overzicht', array('controller' => 'Galleries', 'action' => 'index'), array('escape' => false)); ?>
<?php echo $this->Session->flash(); ?>

<form id="fileupload" action="//jquery-file-upload.appspot.com/" method="POST" enctype="multipart/form-data">
	<legend>Foto's toevoegen aan het album "<?php echo $gallery["Gallery"]["name_dut"]; ?>"</legend>
    <!-- Redirect browsers with JavaScript disabled to the origin page -->
    <noscript><input type="hidden" name="redirect" value="http://blueimp.github.io/jQuery-File-Upload/"></noscript>
    <!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
    <input type="hidden" name="album_id" value="<?php echo $this->params["pass"][0]; ?>" />
    <div class="row fileupload-buttonbar">
        <div class="col-lg-7">
            <!-- The fileinput-button span is used to style the file input field as button -->
            <span class="btn btn-success fileinput-button">
                <i class="glyphicon glyphicon-plus"></i>
                <span>Kies bestanden</span>
                <input type="file" name="files[]" multiple>
            </span>
            <span class="additional hide">
            	<button type="submit" class="btn btn-primary start">
	                <i class="glyphicon glyphicon-upload"></i>
	                <span>Uploaden starten</span>
	            </button>
	            <button type="reset" class="btn btn-warning cancel">
	                <i class="glyphicon glyphicon-ban-circle"></i>
	                <span>Annuleren</span>
	            </button>
	            <span class="additional2 hide">
	            	<button type="button" class="btn btn-danger delete">
		                <i class="glyphicon glyphicon-trash"></i>
		                <span>Verwijderen</span>
		            </button>
		            <input type="checkbox" class="toggle">
		            <!-- The loading indicator is shown during file processing -->
		            <span class="fileupload-loading"></span>
	            </span>
            </span>
        </div>
        <!-- The global progress information -->
        <div class="col-lg-5 fileupload-progress fade">
            <!-- The global progress bar -->
            <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100">
                <div class="progress-bar progress-bar-success" style="width:0%;"></div>
            </div>
            <!-- The extended global progress information -->
            <div class="progress-extended">&nbsp;</div>
        </div>
    </div>
    <!-- The table listing the files available for upload/download -->
    <table role="presentation" class="table table-striped"><tbody class="files"></tbody></table>
</form>

<legend>Foto's in het album</legend>
<div class="gallery">
	<?php $pictures = array_reverse($gallery['Picture']); ?>

	<?php if(empty($pictures)): ?>
		<h4 class="empty text-center">Er bevinden zich nog geen foto's in dit album.</h4>
	<?php else: ?>
		<?php $i = 0; ?>
		<?php foreach($pictures as $picture): ?>
			<?php $i++; ?>
			<?php if($i % 4 == 1): ?>
				<div class="row">
			<?php endif; ?>

			<div class="col-sm-6 col-md-3">
				<a href="#" class="thumbnail" data-pictureid="<?php echo $picture['id']; ?>">
					<?php echo $this->Html->image('uploads/thumbnail/' . $picture['name'], $options = array()); ?>

					<div class="hide picture-info">
						<span class="descr_nl"><?php echo $picture['descr_nl']; ?></span>
						<span class="descr_fr"><?php echo $picture['descr_fr']; ?></span>
						<span class="descr_en"><?php echo $picture['descr_en']; ?></span>
					</div>
				</a>

				
				<div class="alert picture-alert alert-warning <?php if(!($picture['descr_nl'] == '' || $picture['descr_fr'] == '' || $picture['descr_en'] == '')): ?>out<?php endif; ?>" style="position: absolute; bottom: -7px; left: 27px;">Foto info nog niet compleet!</div>
				
			</div>

			<?php if($i % 4 == 0): ?>
				</div>
				<div class="clearfix"></div><br/>
			<?php endif; ?>

		<?php endforeach; ?>
	<?php endif; ?>
</div>


<!-- The template to display files available for upload -->
<script id="template-upload" type="text/x-tmpl">
{% for (var i=0, file; file=o.files[i]; i++) { %}
    <tr class="template-upload fade">
        <td>
            <span class="preview"></span>
        </td>
        <td>
            <p class="name">{%=file.name%}</p>
            {% if (file.error) { %}
                <div><span class="label label-danger">Error</span> {%=file.error%}</div>
            {% } %}
        </td>
        <td>
            <p class="size">{%=o.formatFileSize(file.size)%}</p>
            {% if (!o.files.error) { %}
                <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0"><div class="progress-bar progress-bar-success" style="width:0%;"></div></div>
            {% } %}
        </td>
        <td>
            {% if (!o.files.error && !i && !o.options.autoUpload) { %}
                <button class="btn btn-primary start">
                    <i class="glyphicon glyphicon-upload"></i>
                    <span>Start</span>
                </button>
            {% } %}
            {% if (!i) { %}
                <button class="btn btn-warning cancel">
                    <i class="glyphicon glyphicon-ban-circle"></i>
                    <span>Annuleer</span>
                </button>
            {% } %}
        </td>
    </tr>
{% } %}
</script>

<!-- The template to display files available for download -->
<script id="template-download" type="text/x-tmpl">
{% for (var i=0, file; file=o.files[i]; i++) { %}
    <tr class="template-download fade">
        <td>
            <span class="preview">
                {% if (file.thumbnailUrl) { %}
                    <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" data-gallery><img src="{%=file.thumbnailUrl%}"></a>
                {% } %}
            </span>
        </td>
        <td>
            <p class="name">
                {% if (file.url) { %}
                    <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" {%=file.thumbnailUrl?'data-gallery':''%}>{%=file.name%}</a>
                {% } else { %}
                    <span>{%=file.name%}</span>
                {% } %}
            </p>
            {% if (file.error) { %}
                <div><span class="label label-danger">Error</span> {%=file.error%}</div>
            {% } %}
        </td>
        <td>
            <span class="size">{%=o.formatFileSize(file.size)%}</span>
        </td>
        <td>
            {% if (file.deleteUrl) { %}
                <button class="btn btn-danger delete" data-type="{%=file.deleteType%}" data-url="{%=file.deleteUrl%}"{% if (file.deleteWithCredentials) { %} data-xhr-fields='{"withCredentials":true}'{% } %}>
                    <i class="glyphicon glyphicon-trash"></i>
                    <span>Verwijder</span>
                </button>
                <input type="checkbox" name="delete" value="1" class="toggle">
            {% } else { %}
                <button class="btn btn-warning cancel">
                    <i class="glyphicon glyphicon-ban-circle"></i>
                    <span>Annuleer</span>
                </button>
            {% } %}
        </td>
    </tr>
{% } %}
</script>