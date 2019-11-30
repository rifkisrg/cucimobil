var Application = {
	initApplication: function () {
		$(window).load('pageinit', '#page-one', function () {
			Application.initShowPegawai();
		});
		$(document).on('click', '#ayo-input', function () {
			Application.initAddPegawai();
		})
	},
	initShowPegawai: function () {
		$.ajax({
			url: 'pegawai/pegawai_data',
			type: 'ajax',
			async: true,
			dataType: 'JSON',
			beforeSend: function () {
				$.mobile.loading('show', {
					text: 'Please wait while retrieving data...',
					textVisible: true
				});
			},
			success: function (dataObject) {
				var appendList = "";
				for (var i = 0; i < dataObject.length; i++) {
					appendList = '<li><a href="#page-two?id=' +
						dataObject[i].id_pegawai + '" target="_self" id="detail-pegawai" data-idpegawai="' +
						dataObject[i].id_pegawai + '"><h2>' + dataObject[i].name + '</h2><p>' + dataObject[i].address +
						'</p><p><b>' + dataObject[i].notelp + '</b></p></a></li>';
					$('#list-pegawai').append(appendList);
					$('#list-pegawai').listview('refresh');
				}
			},
			complete: function () {
				$.mobile.loading('hide');
			}
		})
	},
	initAddPegawai: function () {
		var data = $('.form-pegawai').serialize();
		$.ajax({
			url: baseURL+'pegawai/save',
			type: 'POST',
			dataType: 'JSON',
			data: data,
			beforeSend: function () {
				$.mobile.loading('show', {
					text: 'Inserting data...',
					textVisible: true
				});
			},
			complete: function () {
				$.mobile.loading('hide');
			}
		})
	}
};
