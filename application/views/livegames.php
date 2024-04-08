<!DOCTYPE html>
<html>
        <?php 
            
            $user_id = $_SESSION['user_id'];

            if(!isset($user_id)){

            } 
        
        ?>
    <?php $this->load->View($head); ?>
    <!-- / head -->
<body id="page-top">
        <div id="wrapper">
        <div id="content-wrapper" class="d-flex flex-column bg-dark">
            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="fixed-top shadow-lg">
                <nav class="navbar navbar-expand topbar shadow" style="background: black;">
                    <h1 class="h4 mb-0 whitesmoke" style="font: weight 600;"><span><img src="/assets/img/soccer_ico.png" width="40px"></span> CastleBets</h1>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $fullname;?></span>
                                <img class="img-profile rounded-circle"
                                    src="/assets/img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="login" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Beginning of bottom nav -->

                <hr style="width: 50%; background: white; margin: 0px auto;">
            
        </nav>
                <!-- End of bottom nav -->

                <!-- Begin Page Content -->
                <div class="" style="margin-top: 80px">
                <div class="row">
                        <div class="col-lg-3 mb-3 d-flex" style="background: rgba(0,0,0, 0.4); border-bottom: 2px solid teal;">
                            <div class="d-flex flex-column flex-shrink-0 bg-light" style="width: 4.5rem;">
                                <ul class="nav nav-pills nav-flush flex-column mb-auto text-center">
                                <li class="nav-item">
                                    <a href="#" class="nav-link py-3 border-bottom" aria-current="page" title="Home" data-bs-toggle="tooltip" data-bs-placement="right">
                                        <span><img src="/assets/img/home.png" width="35px"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="nav-link py-3 border-bottom" title="Dashboard" data-bs-toggle="tooltip" data-bs-placement="right">
                                        <span><img src="/assets/img/football.png" width="35px"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="nav-link py-3 border-bottom" title="Orders" data-bs-toggle="tooltip" data-bs-placement="right">
                                        <span><img src="/assets/img/table-tennis.png" width="35px"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="nav-link py-3 border-bottom" title="Products" data-bs-toggle="tooltip" data-bs-placement="right">
                                        <span><img src="/assets/img/tennis.png" width="35px"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="nav-link py-3 border-bottom" title="Customers" data-bs-toggle="tooltip" data-bs-placement="right">
                                    <svg class="bi" width="24" height="24" role="img" aria-label="Customers"><use xlink:href="#people-circle"/></svg>
                                    </a>
                                </li>
                                </ul>
                                <div class="dropdown border-top">
                                <a href="#" class="d-flex align-items-center justify-content-center p-3 link-dark text-decoration-none dropdown-toggle" id="dropdownUser3" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="https://github.com/mdo.png" alt="mdo" width="24" height="24" class="rounded-circle">
                                </a>
                                <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser3">
                                    <li><a class="dropdown-item" href="#">New project...</a></li>
                                    <li><a class="dropdown-item" href="#">Settings</a></li>
                                    <li><a class="dropdown-item" href="#">Profile</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="#">Sign out</a></li>
                                </ul>
                                </div>
                            </div>


                            <div style="overflow-y: auto; font-size: 14px; height:750px; padding-top:10px; padding-left:10px">
                                
                                <div>
                                    <select class="custom-select">
                                        <option selected>Football</option>
                                        <option value="1">Basketball</option>
                                        <option value="2">Tennis</option>
                                        <option value="3">Volleyball</option>
                                    </select>
                                </div>
                                <hr style="background: whitesmoke">

                                <div class="wrapper center-block">
                                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                <div class="panel panel-default">
                                    <div class="panel-heading active" role="tab" id="headingOne">
                                    <h6 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-controls="collapseOne"style="text-decoration:none; color:white; font-weight: bold; font-size:14px">
                                            <span><img src="/assets/img/trophy.png" width="20px"></span> Popular Tournaments
                                        </a>
                                    </h6>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                    <div class="panel-body">
                                    <div style="padding-left: 10px">
                                        <div class="form-check" onclick="get_data(538)">
                                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                            <label class="form-check-label" for="exampleRadios1">
                                                EPL
                                            </label>
                                        </div>
                                        <!--<div class="form-check" onclick="get_data(1813)">
                                            <input class="form-check-input bg-secondary" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                            <label class="form-check-label" for="exampleRadios2">
                                                Super League
                                            </label>
                                        </div>
                                        <div class="form-check" onclick="get_data(1814)">
                                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                                            <label class="form-check-label" for="exampleRadios3">
                                                FA Cup
                                            </label>
                                        </div>-->
                                        <div class="form-check" onclick="get_data(543)">
                                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios4" value="option4">
                                            <label class="form-check-label" for="exampleRadios4">
                                                Serie A
                                            </label>
                                        </div>
                                        <div class="form-check" onclick="get_data(544)">
                                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios5" value="option5">
                                            <label class="form-check-label" for="exampleRadios5">
                                                Serie B
                                            </label>
                                        </div>
                                        <div class="form-check" onclick="get_data(540)">
                                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios6" value="option6">
                                            <label class="form-check-label" for="exampleRadios6">
                                            NLS
                                            </label>
                                        </div>
                                        <div class="form-check" onclick="get_data(541)">
                                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios7" value="option7">
                                            <label class="form-check-label" for="exampleRadios7">
                                                Bundesliga
                                            </label>
                                        </div>
                                        <div class="form-check" onclick="get_data(545)">
                                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios8" value="option8">
                                            <label class="form-check-label" for="exampleRadios8">
                                                La Liga
                                            </label>
                                        </div>
                                        <div class="form-check" onclick="get_data(566)">
                                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios9" value="option9">
                                            <label class="form-check-label" for="exampleRadios9">
                                                UEFA
                                            </label>
                                        </div>
                                    </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingTwo">
                                    <h6 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="text-decoration:none; color:white; font-weight: bold; font-size:14px">
                                        
                                    <span><img src="/assets/img/red-flag.png" width="20px"></span> Popular Countries

                                        </a>
                                    </h6>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                    <div class="panel-body">
                                        
                                    </div>
                                    </div>
                                </div>
                                <!--<div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingThree">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Collapsible Group Item #3
                                        </a>
                                    </h4>
                                    </div>
                                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                        <div class="panel-body">
                                            
                                        </div>
                                    </div>
                                </div>-->
                                </div>
                                </div>    
                            </div>
                        </div>

                        <div class="col-lg-6 mb-6" style="">
                            <div class="card-header py-1 d-flex justify-content-between" style="background: rgba(0,0,0, 0.5)">
                                <p class="text-start">English Premier League</p>
                                <p class="text-end">
                                    <select class="custom-select">
                                        <option selected>Over or Under</option>
                                        <option value="1">P1 X P2</option>
                                        <option value="2">others</option>
                                        <option value="3">others</option>
                                    </select>
                                </p>
                            </div>
                            <div id="response" class="rounded-sm" style="padding: 5px; background: rgba(0,0,0, 0.4); height:750px; overflow-y: auto; border-bottom: 2px solid teal;">
                                
                            </div>
                        </div>

                        <div class="col-lg-3 mb- rounded-sm" style="background: rgba(0,0,0, 0.4); border-bottom: 2px solid teal;">
                            <div class="details" style="height: 750px; padding: 5px; overflow-y: auto;">
                                
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-dark">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Castle Holdings 2024</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login">Logout</a>
                </div>
            </div>
        </div>
    </div>

</body>
  <!-- Bootstrap core JavaScript-->
  <script src="/assets/vendor/jquery/jquery.min.js"></script>
    <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="/assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="/assets/js/sb-admin-2.min.js"></script>

    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        .title{ 
            font-size: 14px
        }
        .button-menu{
            padding: 8px 10px;
            border-bottom: 1px solid white;
            cursor: pointer
        }
        .game-info{
            padding: 4px 8px;
            margin-bottom: 10px;
            font-size: 16px;
            cursor: pointer
        }
        .game-info:hover{
            box-shadow: 0 0 3px green
        }

        .custom-select {
        min-width: 100%;
        position: relative;
        }

        select {
        appearance: none;
        /*  safari  */
        -webkit-appearance: none;
        /*  other styles for aesthetics */
        width: 100%;
        font-size: 1.15rem;
        padding: 0.675em 6em 0.675em 1em;
        background-color: #fff;
        border: 1px solid #caced1;
        border-radius: 0.25rem;
        color: #000;
        cursor: pointer;
        }

        .custom-select::before,
        .custom-select::after {
        --size: 0.3rem;
        content: "";
        position: absolute;
        right: 1rem;
        pointer-events: none;
        }

        .custom-select::before {
        border-left: var(--size) solid transparent;
        border-right: var(--size) solid transparent;
        border-bottom: var(--size) solid black;
        top: 40%;
        }

        .custom-select::after {
        border-left: var(--size) solid transparent;
        border-right: var(--size) solid transparent;
        border-top: var(--size) solid black;
        top: 55%;
        }
        ::-webkit-scrollbar {
        width: 4px;   /* for vertical scroll bar*/
        
        }

        /* for Firefox add this class as well*/
        .thin_scroll{
        scrollbar-width: thin; /*auto | thin | none | <length>;*/
        }
                ::-webkit-scrollbar-button {
            background: #ccc
        }
        ::-webkit-scrollbar-track-piece {
            background: #888
        }
        ::-webkit-scrollbar-thumb {
            background: #eee
        }

        .odds{
            color: #fff;
        }

        /** */
        .wrapper{
        width:100%;
        }
        @media(max-width:992px){
        .wrapper{
        width:100%;
        } 
        }
        .panel-heading {
        padding: 0;
            border:0;
        }
        .panel-title>a, .panel-title>a:active{
            display:block;
            padding:15px;
        color:#555;
        font-size:16px;
        font-weight:bold;
            text-transform:uppercase;
            letter-spacing:1px;
        word-spacing:3px;
            text-decoration:none;
        }
        .panel-heading  a:before {
            font-family: 'Font Awesome 5 Free';
            content: "\f077"; /* Unicode value for the Chevron-up icon in Font Awesome */
            float: right;
            transition: all 0.5s;
        }
        .panel-heading.active a:before {
            -webkit-transform: rotate(180deg);
            -moz-transform: rotate(180deg);
            transform: rotate(180deg);
        }
    </style>
    <script>
            
            var socket = new WebSocket("wss://eu-swarm-test.betconstruct.com");

            socket.onopen = function(e) {
                let json_data = { 
                    "command": "request_session",
                        "params": {
                            "site_id": 65,
                            "language": "eng"
                        }
                    }
                    
                socket.send(JSON.stringify(json_data));
                get_data(538)

            };  

            socket.onmessage = function(event) {
                //   alert(`[message] Data received from server: ${event.data}`);
                let response = document.getElementById('response');
                
                var data = JSON.parse(event.data)

                //console.log(data)
            
                //console.log(event.data.indexOf('login'))
                    if(event.data.indexOf('login')==-1){
                        const games = data.data.data.game;
                        fixtures(games)
                        
                        console.log(games) 
                    }
            };

            socket.onclose = function(event) {
                if (event.wasClean) {
                    socket = new WebSocket("wss://eu-swarm-test.betconstruct.com");
                    alert(`[close] Connection closed cleanly, code=${event.code} reason=${event.reason}`);
                } else {
                    // e.g. server process killed or network down
                    // event.code is usually 1006 in this case
                    alert('[close] Connection died');
                }
            };

            socket.onerror = function(error) {
                alert(`[error]`);
            };

            function get_data(sid){

                    $('#response').html('<div style="width: 100%; height: 100%; display: flex; justify-content: center; align-items: center"><img src="assets/img/loading.gif" width="20px"></div>')

                    let json_data = {
                        "command": "get",
                        "params": {
                            "source": "betting",
                            "what": {
                                "game": ["team1_name","team2_name","start_ts"],
                                "event": ["type_1", "price"],
                                "market":[]
                            },
                            "where": {"competition":{"id":sid}, "market":{"type":"OverUnder"}, "market":{"market_type":"OverUnder"}},
                            "subscribe": false
                        }
                    }
                        
                    socket.send(JSON.stringify(json_data));

            }

            function fixtures(games) {
                $('#response').html('')
                for (const gameId in games) {
                    if (games.hasOwnProperty(gameId)) {
                        const game = games[gameId];
                        var w1 = ""
                        var w2 = ""
                        var draw = ""
                        var data = ""
                        var under = ""
                        var over = ""
                        var listitems = ''
                        for(const marketId in game.market){
                            if(game.market.hasOwnProperty(marketId)){
                               const marketType = game.market[marketId].type;
                               const events = game.market[marketId].event
                               for(const eventId in events){
                                    if(events.hasOwnProperty(eventId) && marketType == "P1XP2"){
                                        const type1= events[eventId].type_1;
                                        switch(type1){
                                            case "W1":
                                                w1 = events[eventId].price
                                                break;
                                            case "W2":
                                                w2 = events[eventId].price
                                                break;
                                            case "X":
                                                draw = events[eventId].price
                                                break;
                                        }
                                    }
                                    if(events.hasOwnProperty(eventId) && marketType == "EvenOddTotal"){
                                        const type1= events[eventId].type_1;
                                        console.log(events[eventId].price)
                                        /*switch(type1){
                                            case "W1":
                                                w1 = events[eventId].price
                                                break;
                                            case "W2":
                                                w2 = events[eventId].price
                                                break;
                                            case "X":
                                                draw = events[eventId].price
                                                break;
                                        }*/
                                    }
                               }
                            } 
                        }

                        var bg ="";

                        for(const marketId in game.market){
                            const marketType = game.market[marketId].type;
                            const marketBase = game.market[marketId].base;
                            const events = game.market[marketId].event
                            bg = game.market[marketId].display_color
                            
                            if(marketType === "OverUnder"&& (marketBase == 0.5 || marketBase == 1.5 || marketBase==2.5 || marketBase == 3.5)){
                                if(game.market.hasOwnProperty(marketId)){
                                    const events = game.market[marketId].event
                                    for(const eventId in events){
                                        if(events.hasOwnProperty(eventId)){
                                            const type1= events[eventId].type_1;
                                            switch(type1){
                                                case "Over":
                                                    over = events[eventId].price
                                                    break;
                                                case "Under":
                                                    under = events[eventId].price
                                                    break;
                                            } 
                                        }
                                    }
                                    listitems+=`  <li>
                                    <div class="d-flex justify-content-between">
                                        <div style="width: 50%" class="odds btn btn-outline-secondary btn-sm d-flex justify-content-between"><span>Over ${marketBase}</span><span>${over}</span></div>
                                        <div style="width: 50%" class="odds btn btn-outline-secondary btn-sm d-flex justify-content-between"><span>Under ${marketBase}</span><span>${under}</span></div>
                                        </div>
                                    <li>`
                                }                                 
                            }
                        }
                        console.log(bg)
                        data = `
                            <div class="rounded-sm text-white bold p-2 mt-3 mb-2"style="background: #${bg}">Over/Under</div>
                            <ul>
                                ${ listitems}
                            </ul>`
                                        
                        const gameInfo = `
                            
                            <div class="game-info bg-dark pt-2 pb-2" onclick="displayInfor(this)">
                                <div class="font-weight-bold text-success pb-2" style="font-size:12px">${formatDate(game.start_ts)}
                                <span class=" text-white text-end" stlye="margin-left: 10px"> | Kickoff: ${formatTime(game.start_ts)}</span>
                                </div>
                                
                                <div class="pb-2">
                                    <div class="text-white font-weight-bold" style="font-size:18px">${game.team1_name}</div>
                                    <div class="text-white font-weight-bold" style="font-size:18px">${game.team2_name}</div> 
                                </div>
                                <div class="d-flex justify-content-between">
                                    <div style="width: 30%" class="odds btn btn-outline-secondary btn-sm d-flex justify-content-between"><span>W1</span><span>${w1}</span></div>
                                    <div style="width: 37%" class="odds btn btn-outline-secondary btn-sm d-flex justify-content-between"><span>X </span><span>${draw}</span></div>
                                    <div style="width: 30%" class="odds btn btn-outline-secondary btn-sm d-flex justify-content-between"><span>W2 </span><span>${w2}</span></div>
                                </div>
                                <div id="markt" class="d-none">
                                    ${data}
                                </div>
                            </div>
                        `;
                        
                        $('#response').append(gameInfo);
                    }
                }
                if(Object.keys(games).length === 0){
                    $('#response').html('<div style="width: 100%; height: 100%; display: flex; justify-content: center; align-items: center; font-size: 13px">No Matches found!</div>')
                }
            }

            function formatDate(timestamp) {
                const months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
                const daysOfWeek = ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"];

                const date = new Date(timestamp * 1000);
                const dayOfWeek = daysOfWeek[date.getDay()];
                const dayOfMonth = date.getDate();
                let suffix;

                switch (dayOfMonth % 10) {
                    case 1:
                        suffix = "st";
                        break;
                    case 2:
                        suffix = "nd";
                        break;
                    case 3:
                        suffix = "rd";
                        break;
                    default:
                        suffix = "th";
                        break;
                }

                return `${dayOfWeek} ${dayOfMonth}${suffix} ${months[date.getMonth()]} ${date.getFullYear()}`;
            }

            function formatTime(timestamp) {
                const date = new Date(timestamp * 1000);
                const hours = date.getHours().toString().padStart(2, '0');
                const minutes = date.getMinutes().toString().padStart(2, '0');

                return `${hours}:${minutes}`;
            } 

            function displayInfor(element) {
                var marktElement = element.querySelector("#markt");
                if (marktElement.classList.contains('d-block')) {
                    marktElement.classList.remove('d-block');
                    marktElement.classList.add('d-none');
                } else {
                    marktElement.classList.remove('d-none');
                    marktElement.classList.add('d-block');
                }
            }
            
            // A $( document ).ready() block.
            $( "document" ).ready(function() {
                console.log();
                console.log( "ready!" );
            });

            $('.panel-collapse').on('show.bs.collapse', function () {
                $(this).siblings('.panel-heading').addClass('active');
            });

            $('.panel-collapse').on('hide.bs.collapse', function () {
                $(this).siblings('.panel-heading').removeClass('active');
            }); 

            
    </script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>


