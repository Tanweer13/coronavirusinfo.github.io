<style type="text/css">
	

html{
	scroll-behavior: smooth;

}
*{ margin: 0, padding: 0, box-sizing: border-box; font-family: 'Mulish', sans-serif; }

.row{
	margin-left: 0 !important; 
	margin-right: 0 !important;
}


	/*//////main headerr/////*/
.main_header{
	height: 290px;
	width:90%;
}

.rightside h1{
	font-size: 3rem;
}
.leftside{
	height: 100%;
}

.corona_rot img{
	animation: gocorona 3s linear infinite;
}

@keyframes gocorona{
	0% { transform: rotate(0); }
	100% { transform: rotate(360deg); }
}

.leftside img{
	animation: heartbeat 5s linear infinite;
}
    @keyframes heartbeat
	{
		0%
		{
			transform: scale(.75);
		}
		20%
		{
			transform: scale(1);
		}
		40%
		{
			transform: scale(.75);
		}
		60%
		{
			transform: scale(1);
		}
		80%
		{
			transform: scale(.75);
		}
		100%
		{
			transform: scale(.75);
		}
	}

/************corona updates******/
.corona_update{
	margin: 0 0 15px 0;
	width: 111%;
} 

.corona_update h3{
	color: #0275d8;
}
.corona_update h1{
	font-size: 2rem; text-align: center; 
}

.corona_update h4{
	font-size: 2rem; text-align: center;
	color: #ff7675;

}///***/


/*////////// about section///////*/

.sab_section{
    background-color: #f1f4f8;
    width: 111%;
}


.sab_section h1{
	padding-left: 10%;
}

/*///////// corona syptoms/////*/


.sb_section h1{

	width: 111%;

}



/*///////// footer/////*/


.footer_style{
	background-color: #a29bfe!important;

}
.footer_style{
	padding-bottom: 0!important;

}

/*///////// top cursor////*/

#myBtn {
	display: none; /*hidden by default*/
	position: fixed;  /*fixed position*/
	bottom: 30px;  
	right: 40px; 
	z-index: 99;
	border: none;
	outline: none;
	background-color: #00A8FF;
	color: white;
	cursor: pointer;
	padding: 10px;
	border-radius: 10px;
}

#myBtn:hover {
	background: #606060;

}

/*///////// responsive /////*/

@media(max-width: 768px)
{
	.main_header h1{ height: 240px; text-align: center; }

	.main_header h1{
		text-align: center;
		padding: 0;
		width: 100%;
		font-size: 35px;

	}
	.count_res {
		display: inline!important;

		

	}
	.count_res p{
		text-align: center;
	}

	.count_res h1{
		height: 100%;

	}

	.cor_res {
		margin: 264px 0 15px 0!important;

	}
	
	.about_res {
		margin-left: 0!important;

	}

	.about_res img{
		width: 100%;
	}
	.about_res2 h2{
		margin-top: 20px;
	}

	.about_style{
		margin-bottom: -10rem!important;
	}

	
}


</style>