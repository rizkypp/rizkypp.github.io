package com.pos.project;

import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;

import com.mapbox.mapboxsdk.Mapbox;
import com.mapbox.mapboxsdk.annotations.MarkerOptions;
import com.mapbox.mapboxsdk.geometry.LatLng;
import com.mapbox.mapboxsdk.maps.MapView;
import com.mapbox.mapboxsdk.maps.MapboxMap;
import com.mapbox.mapboxsdk.maps.OnMapReadyCallback;

public class MapActivity extends AppCompatActivity {


    private MapView mapView;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        Mapbox.getInstance(this,"pk.eyJ1IjoicmFuZGMxOTEyIiwiYSI6ImNrYnN1c2FsYTAzb3EydW52bzRvbHI5cHAifQ.8yoHJ5_2HbpYYfFqVxQhcQ");
        setContentView(R.layout.activity_map);



        mapView = (MapView) findViewById(R.id.mapView);

        mapView.onCreate(savedInstanceState);

        mapView.getMapAsync(new OnMapReadyCallback() {
            @Override
            public void onMapReady(MapboxMap mapboxMap) {
                MarkerOptions options = new MarkerOptions();
                options.title("Kantor Pos Pusat").position(new LatLng(-7.9836492, 112.6304635));
                mapboxMap.addMarker(options);
                // Wilayah antaran Wajak
                options.title("KPC : Singosari").position(new LatLng(-7.8936112,112.666182));
                mapboxMap.addMarker(options);
                options.title("KPC : Songsong").position(new LatLng(-7.875509, 112.6771293));
                mapboxMap.addMarker(options);
                options.title("KPC : Losari").position(new LatLng(-7.8868037,112.6706442 ));
                mapboxMap.addMarker(options);
                options.title("KPC : Lawang").position(new LatLng(-7.8363796,112.6964751 ));
                mapboxMap.addMarker(options);
                options.title("KPC : Jabung").position(new LatLng(-7.945361,112.7479876 ));
                mapboxMap.addMarker(options);
                options.title("KPC: Pakis").position(new LatLng(-7.9620999,112.7204054 ));
                mapboxMap.addMarker(options);
                options.title("KPC : Tumpang").position(new LatLng(-8.0050287,112.7623982));
                mapboxMap.addMarker(options);
                options.title("KPC : Wajak").position(new LatLng(-8.102643,112.7301074));
                mapboxMap.addMarker(options);
                // Wilayah antaran Kasembon
                options.title("KPC : Sengkaling").position(new LatLng(-7.9116668,112.5829165));
                mapboxMap.addMarker(options);
                options.title("KPC : Junrejo").position(new LatLng(-7.9034745,112.5630614));
                mapboxMap.addMarker(options);
                options.title("KPC : KarangPloso").position(new LatLng(-7.8962952,112.5921805));
                mapboxMap.addMarker(options);
                options.title("KPC : Bumiaji").position(new LatLng(-7.8363187,112.5284162));
                mapboxMap.addMarker(options);
                options.title("KPC : Batu").position(new LatLng(-7.8682224,112.5163677));
                mapboxMap.addMarker(options);
                options.title("KPC : Pujon").position(new LatLng(-7.8433694,112.4672002));
                mapboxMap.addMarker(options);
                options.title("KPC : Ngantang").position(new LatLng(-7.8568369,112.3681061));
                mapboxMap.addMarker(options);
                options.title("KPC : Kasembon").position(new LatLng(-7.7838682,112.3089768));
                mapboxMap.addMarker(options);
                // Wilayah antaran Bantur
                options.title("KPC : Wagir").position(new LatLng(-8.0129159,112.5919613));
                mapboxMap.addMarker(options);
                options.title("KPC : Kebonagung").position(new LatLng(-8.0323097,112.6113318));
                mapboxMap.addMarker(options);
                options.title("KPC : Kepanjen").position(new LatLng(-8.1315234,112.5652038));
                mapboxMap.addMarker(options);
                options.title("KPC : Ngajum").position(new LatLng(-8.0972073,112.540053));
                mapboxMap.addMarker(options);
                options.title("KPC : Kromengan").position(new LatLng(-8.1436774,112.523593));
                mapboxMap.addMarker(options);
                options.title("KPC : SumberPucung").position(new LatLng(-8.1571868,112.475836));
                mapboxMap.addMarker(options);
                options.title("KPC : Kalipare").position(new LatLng(-8.2046693,112.4634183));
                mapboxMap.addMarker(options);
                options.title("KPC : Donomulyo").position(new LatLng(-8.2794236,112.427674));
                mapboxMap.addMarker(options);
                options.title("KPC : Sumber Manjing Kulon").position(new LatLng(-8.3017378,112.4951502));
                mapboxMap.addMarker(options);
                options.title("KPC : Bantur").position(new LatLng(-8.3176021,112.5708041));
                mapboxMap.addMarker(options);
                // Wilayah Antaran Ampel Gading
                options.title("KPC : Bululawang").position(new LatLng(-8.075747,112.6387493));
                mapboxMap.addMarker(options);
                options.title("KPC : Gondanglegi").position(new LatLng(-8.18106,112.6397743));
                mapboxMap.addMarker(options);
                options.title("KPC : Pagelaran").position(new LatLng(-8.1961061,112.6178178));
                mapboxMap.addMarker(options);
                options.title("KPC : Gedangan").position(new LatLng(-8.3040945,112.655947));
                mapboxMap.addMarker(options);
                options.title("KPC : Sumber Manjing Wetan").position(new LatLng(-8.2673312,112.6911479));
                mapboxMap.addMarker(options);
                options.title("KPC : Turen").position(new LatLng(-8.1707149,112.7020709));
                mapboxMap.addMarker(options);
                options.title("KPC : Dampit").position(new LatLng(-8.213631,112.7514028));
                mapboxMap.addMarker(options);
                options.title("KPC : Ampel Gading").position(new LatLng(-8.2340846,112.8752893));
                mapboxMap.addMarker(options);



            }

        });
    }

    @Override
    protected void onStart(){
        super.onStart();
        mapView.onStart();
    }

    @Override
    protected void onResume() {
        super.onResume();
        mapView.onResume();
    }

    @Override
    protected void onPause(){
        super.onPause();
        mapView.onPause();
    }
    @Override
    protected void onStop(){
        super.onStop();
        mapView.onStop();
    }
    @Override
    protected void onSaveInstanceState(Bundle outState){
        super.onSaveInstanceState(outState);
        mapView.onSaveInstanceState(outState);
    }
    @Override
    public void onLowMemory(){
        super.onLowMemory();
        mapView.onLowMemory();
    }

    @Override
    protected void onDestroy() {
        super.onDestroy();
        mapView.onDestroy();
    }
}
