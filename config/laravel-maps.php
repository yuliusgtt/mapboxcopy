<?php
return [
    "leaflet"=>[
        "css"=>["https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"],
        "js"=>["https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"]
    ],
    "mapbox"=>[
        "css"=>["https://api.mapbox.com/mapbox-gl-js/v2.6.1/mapbox-gl.css"],
        "js"=>["https://api.mapbox.com/mapbox-gl-js/v2.6.1/mapbox-gl.js"],
        "mapbox_access_token"=>env("MAPBOX_ACCESS_TOKEN","pk.eyJ1IjoiZ2F0b3RwIiwiYSI6ImNsMmltdmVmdDBuYjQzYmxheDM3ZmFyYjEifQ.I350W_rjwjdT3z72eVPB7g"),
        "mapbox_username"=>env("MAPBOX_USERNAME","gatotp")
    ]
];