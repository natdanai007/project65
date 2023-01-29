<!DOCTYPE html>
<html>

<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

  <style>
   @import url('https://fonts.googleapis.com/css2?family=Noto+Sans+Thai&display=swap');

body {
  font-family: 'Noto Sans Thai', sans-serif;
}

#welcome {
  position: absolute;
  width: 275px;
  height: 90px;
  margin-left: 1490px;
  margin-top: 10px;
  color: white;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

.navbar {
  position: absolute;
  width: 1920px;
  height: 70px;
  left: 0px;
  top: 0px;
  background: #726741;
  box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}


#pic1 {
  position: absolute;
  width: 275px;
  height: 90px;
  left: 35px;
  top: -8px;
}

#logout {
  position: absolute;
  width: 100px;
  height: 19px;
  margin-left: -12px;
  margin-top: -4px;
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 700;
  font-size: 16px;
  line-height: 19px;
  /* identical to box height */
  color: #726741;
}

#boxlogout {
  box-sizing: border-box;
  position: absolute;
  width: 110px;
  height: 41px;
  margin-left: 1750px;
  top: 15px;

  background: #FFFFFF;
  border: 1px solid rgba(0, 0, 0, 0.25);
  box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
  border-radius: 5px;
}

#boxreserve {
  box-sizing: border-box;
  position: absolute;
  width: 397px;
  height: 86px;
  margin-left: 764px;
  margin-top: 137px;
  background: #726741;
  border: 1px solid #949494;
  border-radius: 13px;
  text-align: center;

}

#TextService {
  position: absolute;
  text-align: center;
  width: 300px;
  height: 56px;
  margin-left: 45px;
  margin-top: 15px;
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 700;
  font-size: 45px;
  line-height: 56px;

  color: #F4F1EC;

  border: 1px solid #726741;
}

#SelectService {
  position: absolute;
  width: 500px;
  height: 47px;
  margin-left: 725px;
  margin-top: 377px;
  font-style: normal;
  font-weight: 700;
  font-size: 40px;
  line-height: 47px;
  color: #474641;

}

#BoxReserve1 {
  box-sizing: border-box;

  position: absolute;
  width: 267.62px;
  height: 442px;
  left: 507px;
  top: 472px;

  background: #FFFFFF;
  border: 4px solid rgba(0, 0, 0, 0.6);
}

#BoxReserve2 {
  box-sizing: border-box;

  position: absolute;
  width: 267.62px;
  height: 442px;
  left: 826.58px;
  top: 472px;

  background: #FFFFFF;
  border: 4px solid rgba(0, 0, 0, 0.6);
}

#BoxReserve3 {
  box-sizing: border-box;

  position: absolute;
  width: 267.62px;
  height: 442px;
  left: 1146.16px;
  top: 472px;

  background: #FFFFFF;
  border: 4px solid rgba(0, 0, 0, 0.6);
}

#BoxReserve4 {
  box-sizing: border-box;

  position: absolute;
  width: 267.62px;
  height: 442px;
  left: 666px;
  top: 1023px;

  background: #FFFFFF;
  border: 4px solid rgba(0, 0, 0, 0.6);
}

#BoxReserve5 {
  box-sizing: border-box;

  position: absolute;
  width: 267.62px;
  height: 442px;
  left: 985.58px;
  top: 1023px;

  background: #FFFFFF;
  border: 4px solid rgba(0, 0, 0, 0.6);
}

#PicTime1 {
  position: absolute;
  width: 193px;
  height: 193px;
  left: 524px;
  top: 1651px;
  background: url(future.png);
}

#PicTime2 {

  position: absolute;
  width: 193px;
  height: 193px;
  left: 773px;
  top: 1648px;

  background: url(future.png);


}

#PicTime3 {
  position: absolute;
  width: 193px;
  height: 193px;
  left: 1021px;
  top: 1648px;

  background: url(future.png);

}

#PicTime4 {
  position: absolute;
  width: 193px;
  height: 193px;
  left: 1268px;
  top: 1648px;
  background: url(future.png);
}

#TextTime1 {
  position: absolute;
  width: 133px;
  height: 45px;
  left: 553px;
  margin-top: -675px;
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 700;
  font-size: 40px;
  line-height: 47px;
  text-align: center;

  color: #253937;
}

#TextTime2 {
  position: absolute;
  width: 115px;
  height: 47px;
  left: 810px;
  margin-top: -675px;
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 700;
  font-size: 40px;
  line-height: 47px;
  /* identical to box height */
  text-align: center;
  color: #253937;
}

#TextTime3 {
  position: absolute;
  width: 138px;
  height: 47px;
  left: 1040px;
  margin-top: -675px;
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 700;
  font-size: 40px;
  line-height: 47px;
  text-align: center;
  color: #253937;
}

#TextTime4 {
  position: absolute;
  width: 138px;
  height: 47px;
  left: 1290px;
  margin-top: -675px;

  font-family: 'Roboto';
  font-style: normal;
  font-weight: 700;
  font-size: 40px;
  line-height: 47px;
  /* identical to box height */

  text-align: center;

  color: #253937;
}

#BoxTime {
  box-sizing: border-box;

  position: absolute;
  width: 1085px;
  height: 64px;
  left: 459px;
  top: 1532px;

  background: #726741;
  border: 1px solid #949494;
  box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
  border-radius: 8px;
}

#period {
  position: absolute;
  width: 500px;
  height: 47px;
  margin-left: -110px;
  margin-top: 6px;
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 700;
  font-size: 40px;
  line-height: 47px;
  text-align: center;
  color: #F4F1EC;
  text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
}

#BoxDateTime {
  box-sizing: border-box;
  position: absolute;
  width: 1085px;
  height: 64px;
  left: 459px;
  top: 2040px;
  background: #726741;
  border: 1px solid #949494;
  box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
  border-radius: 8px;
}

#DateTime {
  position: absolute;
  width: 300px;
  height: 47px;
  margin-left: 19px;
  margin-top: 10px;
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 700;
  font-size: 40px;
  line-height: 47px;
  text-align: center;
  color: #F4F1EC;
  text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
}

#DateTimeLocal {
  box-sizing: border-box;
  position: absolute;
  width: 1085px;
  height: 65px;
  margin-left: -0px;
  margin-top: 125px;
  font-size: 25px;
  text-indent: 10px;
  background: #F5F5F5;
  border: 1px solid #949494;
  box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
  border-radius: 8px;
}



/*checkbox*/
.container {
  display: block;
  position: absolute;
  padding-left: 20px;
  margin-top: 390px;
  margin-left: 80px;
  cursor: pointer;
  border: 2px solid #949494;
  font-size: 22px;
  color: #F4F1EC;
  background: #726741;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

.radio {
  position: absolute;
  width: 100px;
  height: 40px;
  left: 572px;
  margin-top: -550px;
  margin-left: -15px;
  padding-left: 20px;
  font-size: 30px;
  background: #726741;
  box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
  border-radius: 5px;
  color: #F4F1EC;
}

.radio2 {
  position: absolute;
  width: 100px;
  height: 40px;
  left: 821px;
  margin-top: -550px;
  margin-left: -15px;
  padding-left: 20px;
  font-size: 30px;
  background: #726741;
  box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
  border-radius: 5px;
  color: #F4F1EC;
}

.radio3 {
  position: absolute;
  width: 100px;
  height: 40px;
  left: 1069px;
  margin-top: -550px;
  margin-left: -15px;
  padding-left: 20px;
  font-size: 30px;
  background: #726741;
  box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
  border-radius: 5px;
  color: #F4F1EC;
}

.radio4 {
  position: absolute;
  width: 100px;
  height: 40px;
  left: 1317px;
  margin-top: -550px;
  margin-left: -15px;
  padding-left: 20px;
  font-size: 30px;
  background: #726741;
  box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
  border-radius: 5px;
  color: #F4F1EC;
}
#BoxNext {
  width: 401px;
  height: 50px;
  margin-left:35%;
  color:white;
  font-size:25px;
  background: #253937;

  border-radius: 8px;
}

#TextNext {
  position: absolute;
  width: 200px;
  height: 200px;
  margin-left: 85px;
  margin-top: -5px;


  font-family: 'Roboto';
  font-style: normal;
  font-weight: 500;
  font-size: 30px;
  line-height: 35px;

  color: #FFFFFF;
}

    #map {
      box-sizing: border-box;
      position: absolute;
      width: 1080px;
      height: 620px;
      left: 430px;
      margin-top: 350px;
      border: 1px solid #949494;
    }

    #BoxSelectAddress {
      position: absolute;
      width: 430px;
      height: 64px;
      margin-left: 335px;
      margin-top: -60px;
      background: #253937;
      mix-blend-mode: darken;
      box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25), 0px 4px 4px rgba(0, 0, 0, 0.25);
      border-radius: 8px;
    }

    #TextSelectAddress {
      position: absolute;
      width: 380px;
      height: 47px;
      margin-left: 25px;
      margin-top: 10px;
      font-family: 'Roboto';
      font-style: normal;
      font-weight: 700;
      font-size: 40px;
      line-height: 47px;
      color: white;
      /* identical to box height */
      text-align: center;
    }

    #BoxSelectMap {
      box-sizing: border-box;
      position: absolute;
      width: 1085px;
      height: 131px;
      margin-left: 420px;
      margin-top: 220px;
      background: #726741;
      border: 1px solid #949494;
      border-radius: 20px 20px 0px 0px;
    }

    #TextSelectMap {
      position: absolute;
      width: 995px;
      height: 100px;
      margin-left: 40px;
      margin-top: 55px;
      font-family: 'Roboto';
      font-style: normal;
      font-weight: 700;
      font-size: 30px;
      line-height: 34px;
      text-align: center;
      color: #F4F1EC;
    }

    #myAddress {
      position: absolute;
      width: 1080px;
      height: 50px;
      margin-left: 420px;
      margin-top: 1050px;
      font-size: 30px;
    }
    
    #txtaddress{
      position: absolute;
      margin-left: 420px;
      margin-top: 1030px;
      font-size: 20px;
    }
    #txtinput{
      position: absolute;
      width: 900px;
      height: 40px;
      margin-left:-1px;
    }

    #txtsubmit{
      position: absolute;
      width: 100px;
      height: 45px;
      
    }
    #all{
      margin-top: 2430px;
    }

    

nav {
    height: 62px;
    background-color: rgb(255, 255, 255);
    border-bottom: 2px solid #0386FF;
}

#logo {
    position: absolute;
    margin-left: 10%;
    margin-top: 2px;

}

#menu{
    
    
    position: absolute;
    font-size: 20px;
    width: 100%;
    padding-top: 18px;
    
}
#btHome {

    color: #565656;
    margin-left: 22%;
}


#btOut {

    color: #565656;
    margin-left: 1%;
}
#btCart {

    color: #565656;
    margin-left: 46%;
    
    
}
#banner{
    width: 100%;
    height: 80px;
    background-color: #68B3F8;
    padding-top: 12px;
    text-align: center;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}
#container{
    
    width: 1200px;
    height: 790px;
    
    margin-left: auto;
    margin-right: auto;
}
#select{
    font-size: 20px;
    color: #565656;
    background-color: #F5F5F5;
    width: 500px;
    margin-top: 30px;
    text-indent: 5px;
}
#list{
    margin-top: 15px;
    
    
}
.cardGap{
    display: inline-block;
    width:235px ;
    height: 380px;
    margin-top:30px
}
.card {
    box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.2);
    width: 230px;
    background-color: #F0F0F0;
    text-align: center;
    border: #cacaca solid 1px;
  }

  .img{
    width: 100%;
    height: 200px;
    margin: auto; 
    background-color: #FFFFFF;
    border-bottom: #cacaca solid 1px;
  }
  .head{
    font-size: 20px;
    margin-top: 5px;
  }
  .price {
    color: #2e94f3;
    font-size: 15px;
    height:100px;
  }
  .detail{
    font-size: 16px;
  }
  
  #addBt{
    color: white;
    background-color: #F69A56;
    text-align: center;
    cursor: pointer;
    width: 10%;
    margin-top:20px;
    font-size: 18px;
    
    
  }
  
  #addBt:hover {
    opacity: 0.7;
  }

  #btLogin {

    color: #565656;
    margin-left: 50%;

}

#btRegister {
    color: #565656;
    margin-left: 1%;
}
#num{
  font-size: 20px;
  text-align: center;
  width: 70px;
  height: 46px;
  border: #F69A56 solid 1px;
  
  
}
.selectsp{
  font-size: 30px;
  background: #726741;
  box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
  border-radius: 5px;
  color: #F4F1EC;
  padding-left: 30px;

}
#num::-webkit-inner-spin-button, 
#num::-webkit-outer-spin-button {
  opacity: 1;
}
  </style>
</head>

<body style="background:#F5F5F5;">
  <div class="navbar">
  <a href ="form_homepage">
<img id="pic1" src="<?php echo base_url(); ?>img/2.png">
</a>
    <div id="boxlogout">
      <a id="logout" href="login">ออกจากระบบ</a>
    </div>

    <div id="welcome">
      <?php
      if (isset($this->session->userdata['cususername'])) {
        $cus_id = $this->session->userdata['cusid'];
        $cus_user = $this->session->userdata['cususername'];
        $cus_name = $this->session->userdata['cusname'];
      }
      ?>
      <a href="#">สวัสดีคุณ<?php echo $cus_name; ?></a></a>
    </div>

    <div id="boxreserve">
      <p id="TextService">บริการของเรา</p>
    </div>
    <p id="SelectService">เลือกบริการนวดสำหรับคุณ</p>
    <!--The div elements for the map and message -->
    <form action="form_pay" method="post" style="background-color:transparent">
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



    
    
   <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> 
   <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>  <br> <br> <br> <br>
   <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>
   <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>

    <div id="container">
   <div>

   </div>

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
                  
                   ชื่อ<p class="head"><?php echo $row['sp_name'] ?></p>
                   <p>ความถนัด</p>
                   <p class="price"><?php echo $row['sp_aptitude'] ?></p>
                   <label class="selectsp" >เลือก
                   <input type="radio" id="addBt" name="spid" value="<?php echo $row['sp_id'] ?>"></input>
                    </lable>
               </div>
           </div>
           
       <?php
           $item++;
       }

       ?>
   </div>
   <br><br><br><br>
   <button id="BoxNext" type="submit" >ชำระเงิน</button>
   <br><br><br><br><br><br><br><br>
</div>

</div>

    </div>
    </Form>

</body>

</html>