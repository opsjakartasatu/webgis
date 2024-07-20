<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Esri Leaflet Popup dengan Tabel Informasi dan Lampiran</title>
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
  <style>
    #map {
      height: 500px;
    }

    .popup-table {
      width: 100%;
      border-collapse: collapse;
    }

    .popup-table th,
    .popup-table td {
      border: 1px solid #ddd;
      padding: 8px;
    }

    .popup-table th {
      background-color: #f2f2f2;
    }

    .popup-table td {
      text-align: left;
    }

    .popup-header {
      font-size: 12px;
      font-weight: bold;
      margin-bottom: 5px;
    }

    .popup-content {
      margin-bottom: 10px;
    }
  </style>
</head>

<body>
  <div id="map"></div>
  <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
  <script src="https://unpkg.com/esri-leaflet"></script>
  <script>
    // Inisialisasi peta

    var map = L.map('map').setView([-6.175365677494854, 106.82714821651759], 13);

    // Tambahkan basemap
    L.esri.basemapLayer("Topographic").addTo(map);

    // Tambahkan layer fitur poligon
    var featureLayer = L.esri.featureLayer({
      url: 'https://tataruang.jakarta.go.id/server/rest/services/Hosted/Kependudukan_Jakpus/FeatureServer/0',
      style: function() {
        return {
          color: '#70ca49',
          weight: 2
        };
      },
      onEachFeature: function(feature, layer) {
        console.log('Fitur diklik:', feature); // Log fitur
        layer.on('click', function(e) {
          console.log('Layer diklik:', e); // Log peristiwa klik
          var objectId = feature.properties.objectid || feature.properties.OBJECTID;
          var kecamatan = feature.properties.wadmkc;
          var kelurahan = feature.properties.wadmkd;
          console.log('Object ID:', objectId); // Log Object ID
          showPopupWithAttachment(objectId, e.latlng, kecamatan, kelurahan);
        });
      }
    }).addTo(map);

    // Fungsi untuk mengambil dan menampilkan lampiran dalam popup
    function showPopupWithAttachment(objectId, latlng, kecamatan, kelurahan) {
      if (!objectId) {
        console.error('Tidak ditemukan Object ID');
        return;
      }

      console.log('Mengambil lampiran untuk objectId:', objectId); // Log objectId

      // Menggunakan fitur query untuk mengambil lampiran
      L.esri.request('https://tataruang.jakarta.go.id/server/rest/services/Hosted/Kependudukan_Jakpus/FeatureServer/0/' + objectId + '/attachments', {}, function(error, response) {
        if (error) {
          console.error('Kesalahan mengambil lampiran:', error);
          return;
        }

        console.log('Respons lampiran:', response); // Log respons

        var attachments = response.attachmentInfos;
        console.log('Lampiran untuk objectId ' + objectId + ':', attachments);

        var attachmentHtml = '<div class="popup-content">';
        attachmentHtml += '<div class="popup-header">Informasi</div>';
        attachmentHtml += '<table class="popup-table">';
        attachmentHtml += '<tr><th>Kecamatan</th><td>' + kecamatan + '</td></tr>';
        attachmentHtml += '<tr><th>Kelurahan</th><td>' + kelurahan + '</td></tr>';
        attachmentHtml += '</table>';
        attachmentHtml += '<div class="popup-header">Lampiran</div>';

        if (attachments && attachments.length > 0) {
          attachmentHtml += '<ul>';
          attachments.forEach(function(attachment) {
            var url = 'https://tataruang.jakarta.go.id/server/rest/services/Hosted/Kependudukan_Jakpus/FeatureServer/0/' + objectId + '/attachments/' + attachment.id;
            var name = attachment.name;
            attachmentHtml += '<li><a href="' + url + '" target="_blank">' + name + '</a></li>';
          });
          attachmentHtml += '</ul>';
        } else {
          attachmentHtml += '<p>Tidak ada lampiran tersedia.</p>';
        }

        L.popup()
          .setLatLng(latlng)
          .setContent(attachmentHtml)
          .openOn(map);
      });
    }
  </script>
</body>

</html>