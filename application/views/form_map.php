<!DOCTYPE html>
<html>

<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<link href="<?php echo base_url();?>CSS/form_map.css" rel="stylesheet" >
 
</head>

<body style="background:#F5F5F5;">
  <div class="navbar">
    <img id="pic1" src="<?php echo base_url(); ?>img/2.png">
    <div id="boxlogout">
      <a id="logout" href="login">ออกจากระบบ</a>
    </div>

    <div id="welcome">
      <?php
      if (isset($this->session->userdata['username'])) {
        $cus_id = $this->session->userdata['cusid'];
        $cus_user = $this->session->userdata['username'];
        $cus_name = $this->session->userdata['name'];
      }
      ?>
      <a href="#">สวัสดีคุณ<?php echo $cus_name; ?></a></a>
    </div>

    <div id="boxreserve">
      <p id="TextService">บริการของเรา</p>
    </div>
    <p id="SelectService">เลือกบริการนวดสำหรับคุณ</p>
    <!--The div elements for the map and message -->
    <form action="form_reserve" method="post" style="background-color:transparent">
      <br>
      <br><br><br>
      <input type="hidden" name="id">
      <input type="hidden" name="cusid"  value="<?php echo $cus_id;?>"> 
      <input id="total" name="total" type="hidden" >
      <br>
  </div>
  <div id="catlist">
  <div id="BoxReserve1">
    <label class="container">เลือก
      <input   id="myCheck1" type="checkbox" name="svname[]" price="250" text="นวดแผนไทย" value="นวดแผนไทย">
    </label>
  </div>
  <div id="BoxReserve2">
    <label class="container">เลือก
      <input  id="myCheck2" type="checkbox" name="svname[]" price="300" value="นวดแผนไทย">
  </div>
  <div id="BoxReserve3">
    <label class="container">เลือก
      <input id="price3" type="checkbox" name="svname[]" price="350" value="นวดศีรษะหลัง ไหล่ และเท้า ผ่อนคลายทั้งร่างกาย">
  </div>
  <div id="BoxReserve4">
    <label class="container">เลือก
      <input id="price4" type="checkbox" name="svname[]" price="400" value="นวดกดจุดใบหน้าและศีรษะ">
  </div>
  <div id="BoxReserve5">
    <label class="container">เลือก
      <input id="price5" type="checkbox" name="svname[]" price="450" value="นวดจับเส้น">
    </div>
  <div id="BoxTime">
    <p id="period">ระยะเวลา</p>
  </div>
  <div>
    <img id="PicTime1" src="<?php echo base_url(); ?>img/future.png">
    <p id="TextTime1">60นาที</p>
    <label class="radio">เลือก
      <input type="radio" name="period" price="250" value="60นาที">
    </label>
    </input>
  </div>
  <div>
    </img>
    <img id="PicTime2" src="<?php echo base_url(); ?>img/future.png">
    <p id="TextTime2">90นาที</p>
    <label class="radio2">เลือก
      <input type="radio" name="period" price="250" value="90นาที">
    </label>
    </input>
  </div>
  <div>
    <img id="PicTime3" src="<?php echo base_url(); ?>img/future.png">
    <p id="TextTime3">120นาที</p>
    <label class="radio3">เลือก
      <input type="radio" name="period" price="250" value="120นาที">
    </label>
    </input>
    </div>
    </img>
  </div>
  <div>
    <img id="PicTime4" src="<?php echo base_url(); ?>img/future.png">
    <p id="TextTime4">180นาที</p>
    <label class="radio4">เลือก
      <input type="radio" name="period" price="250" value="180นาที">
    </label>
    </input>
    </img>
  </div>

  
</div>
  <div id="BoxDateTime">
    <p id="DateTime">วันที่และเวลา</p>
    <input id="DateTimeLocal" name="datetime" type="datetime-local">
  </div>
  
<div id="all">
    <div id="BoxSelectMap">
      <p id="TextSelectMap">โปรดเลื่อนแผนที่เพื่อปักหมุด หรือใช้ช่องค้นหาในการเลือกตำแหน่งของคุณ
      <div class="dd">
        <input type="hidden" id="myText">
      </div>
      <div id="BoxSelectAddress">
        <p id="TextSelectAddress">เลือกที่อยู่ของคุณ
      </div>
    </div>
    <div id="map"></div>
    <div id="msg"></div>
    <script>




      // Initialize and add the map
      let map;
      let marker;
      let geocoder;
      let responseDiv;
      let response;

function calcAndShowTotal() {
  var total = 0;
  $('#catlist :checkbox:checked').each(function() {
    total += parseFloat($(this).attr('price')) || 0;
  });
  $('#total').val(total);


  $('#catlist  :radio:checked').each(function() {
    total += parseFloat($(this).attr('price')) || 0;
  });
  $('#total').val(total);
}
$('#catlist :radio').change(calcAndShowTotal).change();
$('#catlist :checkbox').change(calcAndShowTotal).change();


      function initMap() {
        map = new google.maps.Map(document.getElementById("map"), {
          zoom: 15,
          center: {
            lat: 16.439625,
            lng: 102.828728
          },
          mapTypeControl: false,
        });
        geocoder = new google.maps.Geocoder();

        const inputText = document.createElement("input");
        inputText.id = "txtinput";
        inputText.type = "text";
        inputText.placeholder = "ค้นหาที่อยู่ของคุณ";

        const submitButton = document.createElement("input");
        submitButton.id = "txtsubmit";
        submitButton.type = "button";
        submitButton.value = "ค้นหา";
        submitButton.classList.add("button", "button-primary");

        const clearButton = document.createElement("input");
        clearButton.id = "txtclear";
        clearButton.type = "button";
        clearButton.value = "เคียร์";
        clearButton.classList.add("button", "button-secondary");
        response = document.createElement("pre");
        response.id = "response";
        response.innerText = "";
        responseDiv = document.createElement("div");
        responseDiv.id = "response-container";
        responseDiv.appendChild(response);

        const instructionsElement = document.createElement("p");

        instructionsElement.id = "instructions";
        instructionsElement.innerHTML =
          "<strong>Instructions</strong>: Enter an address in the textbox to geocode or click on the map to reverse geocode.";
        map.controls[google.maps.ControlPosition.TOP_LEFT].push(inputText);
        map.controls[google.maps.ControlPosition.TOP_LEFT].push(submitButton);
        map.controls[google.maps.ControlPosition.TOP_LEFT].push(clearButton);
        //  map.controls[google.maps.ControlPosition.LEFT_TOP].push(instructionsElement);
        //  map.controls[google.maps.ControlPosition.LEFT_TOP].push(responseDiv);
        marker = new google.maps.Marker({
          map,
        });
        map.addListener("click", (e) => {
          geocode({
            location: e.latLng
          });
          setgeocode({
            location: e.latLng
          });
        });
        submitButton.addEventListener("click", () =>
          geocode({
            address: inputText.value
          })
        );
        clearButton.addEventListener("click", () => {
          clear();
        });
        clear();
      }

      function clear() {
        marker.setMap(null);
        responseDiv.style.display = "none";
      }

      function geocode(request) {
        clear();
        geocoder
          .geocode(request)
          .then((result) => {
            const {
              results
            } = result;

            map.setCenter(results[0].geometry.location);
            marker.setPosition(results[0].geometry.location);
            marker.setMap(map);
            responseDiv.style.display = "block";
            response.innerText = JSON.stringify(result, null, 2);
            var dataset = JSON.parse(response.innerText);
            var lat = dataset.results[0].geometry.location.lat;
            var lng = dataset.results[0].geometry.location.lng;
            var address = dataset.results[0].formatted_address;
            document.getElementById("myText").value = lat + "," + lng;
            document.getElementById("myAddress").value = address;

            console.log(lng);
            console.log(address);
            return results;
          })
          .catch((e) => {
            alert("Geocode was not successful for the following reason: " + e);
          });
      }

      function setgeocode(request) {
        //console.log(request);
      }

      window.initMap = initMap;
    </script>
    <!--Load the API from the specified URL -- remember to replace YOUR_API_KEY-->
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCsQxnJFzWx0gcstlRbtZSdy_E53fMgH8U&callback=initMap">
    </script>

    <div>
      <textarea type="text" id="myAddress" name="address"></textarea>
    </div>



    
    
   
    <div id="container">
   

   <div id="list">
       <?php
       $item = 1;
       foreach ($service_provider as $row) {
       ?>
           <div class="cardGap">

               <div class="card">
                   <div class="img">
                       <img src="<?php echo base_url('img');?>/<?php echo $row['sp_picture'] ?>" alt="ไม่มีรูฟภาพ" style="width:98%;height:98%;margin-top:2px; line-height: 200px;">
                   </div>

                   <p class="head"><?php echo $row['sp_name'] ?></p>
                   <p class="price"><?php echo $row['sp_aptitude'] ?></p>
                   <input type="radio" id="addBt" name="spid" value="<?php echo $row['sp_id'] ?>">เลือก</input></a>

               </div>
           </div>
           
       <?php
           $item++;
       }

       ?>
   </div>
</div>

</div>
    </div>
    <button id="BoxNext" type="submit" >ถัดไป</button>
    </Form>

</body>

</html>