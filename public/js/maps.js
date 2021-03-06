// googleMapsAPIを持ってくるときに,callback=initMapと記述しているため、initMap関数を作成
function initMap() {
    // welcome.blade.phpで描画領域を設定するときに、id=mapとしたため、その領域を取得し、mapに格納します。
    map = document.getElementById("map");

    let shigematsu = {lat: 33.844511938125954, lng: 132.78407352838073};
    // オプションを設定
    opt = {
        zoom: 15, //地図の縮尺を指定
        center: shigematsu, //センターを東京タワーに指定
    };
    // 地図のインスタンスを作成します。第一引数にはマップを描画する領域、第二引数にはオプションを指定
    mapObj = new google.maps.Map(map, opt);

     // 追加
     marker = new google.maps.Marker({
        // ピンを差す位置を決めます。
        position: shigematsu,
	// ピンを差すマップを決めます。
        map: mapObj,
	// ホバーしたときに「tokyotower」と表示されるようにします。
        title: 'HAIRSALON◯◯◯◯',
    });

}