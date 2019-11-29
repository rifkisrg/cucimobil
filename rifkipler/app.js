var Application = {
    initApplication: function () {
        $(document).on('click', '#btn-cust', function () {
            Application.initShowListCustomer();
        });
		$(document).on('click', '#ayo-input', function () {
			Application.initAddPegawai();
		})
    },
    initShowListCustomer: function () {
        $.ajax({
			url: 'http://cucimobil/DataCuciMobil/lihatCustomer',
            type: 'get',
            dataType: 'JSON',
            beforeSend: function () {
                $.mobile.loading('show', {
                    text: 'Please wait while retrieving data...',
                    textVisible: true
                });
            },
            success: function (dataObject) {
                console.log(dataObject.data[0].name);
                for (var i = 0; i < dataObject.data.length; i++) {
                    var appendList = '<li><a href="#page-one?id=' + dataObject.data[0].id_customer + '" target="_self" id="detail-mhs" data-nimmhs="' + dataObject.nim + '"><h2>' + dataObject.data[0].name + '</h2><p>' + dataObject.data[0].username + '</p></a></li>';
                    $('#list-cust').append(appendList);
                }
            },
            complete: function () {
                $.mobile.loading('hide');
            }
        })
	},
	initAddPegawai: function () {
		$.ajax({
			url: 'https://Users/juju/Documents/cucimobil/application/controllers/DataCuciMobil/tambahPegawai',
			type: 'post',
			dataType: 'JSON',
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
