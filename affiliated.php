<style>
        .slider {
            width: 100%;
            overflow: hidden;
            background-color: white;
            position: relative;
            display: flex;
            justify-content: center;
        }

        .slider-track {
            display: flex;
            animation: scroll 15s linear infinite;
        }

        .slider-track:hover {
            animation-play-state: paused;
        }

        .slider-track img {
            margin: 0 20px;
        }

        @keyframes scroll {
            0% {
                transform: translateX(0);
            }
            100% {
                transform: translateX(calc(-100% / 3));
            }
        }

        .slider-track::before {
            content: '';
            position: absolute;
            top: 0;
            right: 100%;
            width: 100%;
            height: 100%;
            background: white;
        }

        .slider-track::after {
            content: '';
            position: absolute;
            top: 0;
            left: 100%;
            width: 100%;
            height: 100%;
            background: white;
        }
    </style>
<div class="slider">
        <div class="slider-track">
            <img src="./images/partner-1.png" alt="Brand 1" width="450px" height="80px">
            <img src="./images/partner-2.png" alt="Brand 2" width="300px" height="100px">
            <img src="./images/partner-3.png" alt="Brand 3" width="350px" height="80px">
            <img src="./images/partner-1.png" alt="Brand 1" width="450px" height="80px">
            <img src="./images/partner-2.png" alt="Brand 2" width="300px" height="100px">
            <img src="./images/partner-3.png" alt="Brand 3" width="350px" height="80px">
			<img src="./images/partner-1.png" alt="Brand 1" width="450px" height="80px">
            <img src="./images/partner-2.png" alt="Brand 2" width="300px" height="100px">
            <img src="./images/partner-3.png" alt="Brand 3" width="350px" height="80px">
        </div>
    </div>