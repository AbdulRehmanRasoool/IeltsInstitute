<style>

@keyframes scroll {
	0% { transform: translateX(0); }
	100% { transform: translateX(calc(-250px * 3)); }
}

.slider {
	background: white;
	box-shadow: 0 10px 20px -5px rgba(0, 0, 0, .125);
	height: 100px;
	margin: auto;
	overflow: hidden;
	position: relative;
	width: 100%;
	display: flex;
	justify-content: center;
	align-items: center;
	
	&::before,
	&::after {
		content: "";
		height: 100px;
		position: absolute;
		width: 100px;
		z-index: 2;
		background: linear-gradient(to right, white, rgba(255, 255, 255, 0));
	}
	
	&::after {
		right: 0;
		top: 0;
		transform: rotateZ(180deg);
	}

	&::before {
		left: 0;
		top: 0;
	}
	
	.slide-track {
		animation: scroll 10s linear infinite;
		display: flex;
		width: calc(250px * 6); /* 2 loops of 3 partners */
	}
	
	.slide {
		height: 100px;
		width: 250px;
	}
}
</style>
<div class="slider">
	<div class="slide-track">
		<div class="slide">
			<img src="./images/partner-1.png" height="80"  alt="" />
		</div>
		<div class="slide">
			<img src="./images/partner-2.png" height="80"alt="" />
		</div>
		<div class="slide">
			<img src="./images/partner-3.png" height="100" alt="" />
		</div>
        <div class="slide">
			<img src="./images/partner-1.png" height="80"  alt="" />
		</div>
		<div class="slide">
			<img src="./images/partner-2.png" height="80"alt="" />
		</div>
		<div class="slide">
			<img src="./images/partner-3.png" height="100" alt="" />
		</div>
	</div>
</div>