$(document).ready(function(){

				$("#s_estado").change(function () {

					$('#s_municipio').find('option').remove().end().append('<option value="whatever"></option>').val('whatever');

					$("#s_estado option:selected").each(function () {
						id_estado = $(this).val();
						$.post("includes/getCiudad.php", { id_estado: id_estado }, function(data){
							$("#s_ciudad").html(data);
						});
					});
				})

				$("#s_ciudad").change(function () {

					$("#s_ciudad option:selected").each(function () {
						id_ciudad = $(this).val();
						$.post("includes/getMunicipio.php", { id_ciudad: id_ciudad }, function(data){
							$("#s_municipio").html(data);
						});
					});
				})


			})
