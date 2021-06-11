<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Rapid Website AddtoCart Page</title>
        <!-- Font Awesome icons (free version)-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
		<link href='https://fonts.googleapis.com/css?family=Rubik' rel='stylesheet'>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet">
        <!-- Fonts CSS-->
        <link href="css/addtocart.css" rel="stylesheet">
		<style>
		@media (min-width: 1281px) {
			.linebreak13
			{
				position: relative;
    top: -155px;
    height: 2.78px;
    background: #CE202F;
			}
					.linebreak12
		{
		position: relative;
    top: -171px;
    height: 2.78px;
    background: #1F3D7B;
	}
			.cross990
			{
				position: relative;
    top: -112px;
    right: -324px;
    border-color: #FFFFFF;
    color: #C6C6C6;
    background-color: Transparent;
    background-repeat: no-repeat;
    border: none;
    cursor: pointer;
    overflow: hidden;
    outline: none;
			}
			
			.imaging11
			{
				position: relative;
    width: 22.27px;
    height: 22.27px;
    right: -16px;
    top: -96.38px;
    background: #FFFFFF;
    box-sizing: border-box;
    border-radius: 16.705px;
			}
			.point67
			{
				position: relative;
    width: 46.63px;
    height: 9.74px;
    left: 5.47px;
    top: -88.09px;
    font-family: Rubik;
    font-style: normal;
    font-weight: normal;
    font-size: 8.3525px;
    line-height: 10px;
    display: flex;
    align-items: center;
    text-transform: uppercase;
    color: #1F3D7B;
			}
		.it
		{
		position: relative;
    top: 30px;
    right: -76px;
    font-family: Rubik;
    font-style: normal;
    font-weight: normal;
    font-size: 20px;
    line-height: 24px;
    color: #333333;
    flex: none;
    order: 1;
    flex-grow: 0;
    margin: 0px 10px;
	}
		.button91
		{
		display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
    padding: 7px;
    position: absolute;
    width: 294px;
    height: 40px;
    left: 46px;
    top: 464px;
    background: #CE202F;
    border-radius: 4px;
    font-family: Rubik;
    font-style: normal;
    font-weight: 500;
    font-size: 19px;
    line-height: 24px;
    text-transform: uppercase;
    color: #FFFFFF;
    flex: none;
    order: 0;
    flex-grow: 0;
    margin: 0px 4px;
	}
		.card-title190
		{
		position: absolute;
    width: 374px;
    height: 38px;
    left: 48px;
    top: 48px;
    font-family: Rubik;
    font-style: normal;
    font-weight: bold;
    font-size: 22px;
    line-height: 26px;
    text-transform: uppercase;
    color: #000000;
	}
	#card-text3
	{
	font-family: Rubik;
    font-style: normal;
    font-weight: normal;
    font-size: 20px;
    line-height: 24px;
    color: #1F3D7B;
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
    padding: 20px;
    position: relative;
    width: 388px;
    height: 40px;
    left: -18px;
    top: -61px;
    background: #FFFFFF;
    opacity: 0.7;
    border: 1px solid #1F3D7B;
    box-sizing: border-box;
    border-radius: 4px;
    flex: none;
    order: 1;
    flex-grow: 0;
    margin: 12px 0px;
	}
	.card-title3
	{
	position: relative;
    width: 234px;
    height: 24px;
    left: -18px;
    top: -59px;
    font-family: Rubik;
    font-style: normal;
    font-weight: normal;
   font-size: 14px;
    line-height: 16px;
    text-transform: uppercase;
    color: #000000;
    flex: none;
    order: 0;
    flex-grow: 0;
    margin: 0px 0px;
	}
.iu55
{
position: relative;
    left: -18px;
    top: -67px;
}
.it55
{
position: relative;
    width: 481px;
    height: 24px;
    left: 7px;
    top: -85px;
    font-family: Rubik;
    font-style: normal;
    font-weight: normal;
  font-size: 14px;
    line-height: 16px;
    color: #333333;
    flex: none;
    order: 1;
    flex-grow: 0;
    margin: 0px 10px;
}
	
		.totalamount
		{
		position: relative;
    width: 148px;
    height: 28px;
    left: 146px;
    top: -69px;
    font-family: Rubik;
    font-style: normal;
    font-weight: 500;
   font-size: 17px;
    line-height: 20px;
    display: flex;
    align-items: center;
    text-transform: uppercase;
    color: #CE202F;
    flex: none;
    order: 1;
    flex-grow: 0;
    margin: 0px 24px;
	}
		.editicon
		{
		position: relative;
    top: -85px;
    left: -12px;
	}
	.deleteicon
	{
	position: relative;
    top: -86px;
	}
		.ticketno
		{
		position: relative;
    width: 95px;
    height: 24px;
    left: 40px;
    top: -108px;
    font-family: Rubik;
    font-style: normal;
    font-weight: normal;
    font-size: 14px;
    line-height: 16px;
    display: flex;
    align-items: center;
    text-transform: uppercase;
    color: #1F3D7B;
    flex: none;
    order: 2;
    flex-grow: 0;
    margin: 0px 8px;
	}
		.amountdetail
		{
		position: relative;
    width: 87px;
    height: 24px;
    left: -20px;
    top: -84px;
    font-family: Rubik;
    font-style: normal;
    font-weight: bold;
    font-size: 8px;
    line-height: 16px;
    display: flex;
    align-items: center;
    text-transform: uppercase;
    color: #CE202F;
    flex: none;
    order: 0;
    flex-grow: 0;
    margin: 0px 8px;
	}
		.card-text44
		{
		position: relative;
    width: 221px;
    height: 24px;
    left: 96px;
    top: -130px;
    font-family: Rubik;
    font-style: normal;
    font-weight: bold;
    font-size: 14px;
    line-height: 16px;
    text-transform: uppercase;
    color: #000000;
    flex: none;
    order: 0;
    flex-grow: 0;
    margin: 8px 0px;
	}
	.card-text55
	{
	position: relative;
    width: 209px;
    height: 21px;
    left: 96px;
    top: -133px;
    font-family: Rubik;
    font-style: normal;
    font-weight: normal;
    font-size: 13px;
    line-height: 15px;
    color: #000000;
    flex: none;
    order: 1;
    flex-grow: 0;
    margin: 8px 0px;
	}
		.logoimage11
		{
		position: relative;
    width: 95.41px;
    height: 109.1px;
    left: -33px;
    top: -42px;
    flex: none;
    order: 0;
    flex-grow: 0;
    margin: 0px 20px;
	}
		.card-title22
		{
		position: relative;
    width: 183px;
    height: 38px;
    left: -10px;
    top: -37px;
    font-family: Rubik;
    font-style: normal;
    font-weight: bold;
    font-size: 22px;
    line-height: 26px;
    text-transform: uppercase;
    color: #000000;
    flex: none;
    order: 0;
    flex-grow: 0;
    margin: 24px 0px;
	}
		.card124
		{
		display: flex;
    flex-direction: column;
    align-items: flex-start;
    padding: 48px;
    position: absolute;
    width: 774px;
    height: 538px;
    left: -131px;
    top: -62px;
    background: #FFFFFF;
    box-shadow: 0px 0px 12px rgb(0 0 0 / 25%);
    border-radius: 12px;
	}
		.card123
		{
		display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: flex-start;
    padding: 48px;
    position: absolute;
    width: 441px;
    height: auto;
    left: 122px;
    top: -62px;
    background: #FFFFFF;
	box-shadow: 0px 0px 12px rgb(0 0 0 / 25%);
    border-radius: 12px;
	}
			#abc
		{
		font-family: Rubik;
    font-style: normal;
    font-weight: 900;
	}
		.jack
		{
		font-family: Rubik;
    font-style: normal;
    font-weight: 900;
	}
	.jack2
	{
	font-family: Rubik;
    font-style: normal;
    font-weight: 900;
	}
	.button3
	{
	font-family: Rubik;
    font-style: normal;
    font-weight: 500;
	}
	.button4
	{
	font-family: Rubik;
    font-style: normal;
    font-weight: 500;
	}
		.header {
    width: 100%;
    background-image:url("assets/img/yourcart.png");
    height: auto;
    min-height: 526px;
	position:relative;
	top:80px;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
}
}
@media (min-width: 1025px) and (max-width: 1280px) {
	.linebreak13
			{
				position: relative;
    top: -155px;
    height: 2.78px;
    background: #CE202F;
			}
					.linebreak12
		{
		position: relative;
    top: -171px;
    height: 2.78px;
    background: #1F3D7B;
	}
	.cross990
			{
		position: relative;
    top: -112px;
    right: -324px;
    border-color: #FFFFFF;
    color: #C6C6C6;
    background-color: Transparent;
    background-repeat: no-repeat;
    border: none;
    cursor: pointer;
    overflow: hidden;
    outline: none;
			}
		.imaging11
			{
				position: relative;
    width: 22.27px;
    height: 22.27px;
    right: -16px;
    top: -96.38px;
    background: #FFFFFF;
    box-sizing: border-box;
    border-radius: 16.705px;
			}
			.point67
			{
				position: relative;
    width: 46.63px;
    height: 9.74px;
    left: 5.47px;
    top: -88.09px;
    font-family: Rubik;
    font-style: normal;
    font-weight: normal;
    font-size: 8.3525px;
    line-height: 10px;
    display: flex;
    align-items: center;
    text-transform: uppercase;
    color: #1F3D7B;
			}
.it
		{
		position: relative;
    top: 30px;
    right: -76px;
    font-family: Rubik;
    font-style: normal;
    font-weight: normal;
    font-size: 20px;
    line-height: 24px;
    color: #333333;
    flex: none;
    order: 1;
    flex-grow: 0;
    margin: 0px 10px;
	}
.button91
		{
		display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
    padding: 7px;
    position: absolute;
    width: 294px;
    height: 40px;
    left: 46px;
    top: 464px;
    background: #CE202F;
    border-radius: 4px;
    font-family: Rubik;
    font-style: normal;
    font-weight: 500;
    font-size: 19px;
    line-height: 24px;
    text-transform: uppercase;
    color: #FFFFFF;
    flex: none;
    order: 0;
    flex-grow: 0;
    margin: 0px 4px;
	}
		.card-title190
		{
		position: absolute;
    width: 374px;
    height: 38px;
    left: 48px;
    top: 48px;
    font-family: Rubik;
    font-style: normal;
    font-weight: bold;
    font-size: 22px;
    line-height: 26px;
    text-transform: uppercase;
    color: #000000;
	}
	#card-text3
	{
	font-family: Rubik;
    font-style: normal;
    font-weight: normal;
    font-size: 20px;
    line-height: 24px;
    color: #1F3D7B;
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
    padding: 20px;
    position: relative;
    width: 388px;
    height: 40px;
    left: -18px;
    top: -61px;
    background: #FFFFFF;
    opacity: 0.7;
    border: 1px solid #1F3D7B;
    box-sizing: border-box;
    border-radius: 4px;
    flex: none;
    order: 1;
    flex-grow: 0;
    margin: 12px 0px;
	}
	.card-title3
	{
	position: relative;
    width: 234px;
    height: 24px;
    left: -18px;
    top: -59px;
    font-family: Rubik;
    font-style: normal;
    font-weight: normal;
   font-size: 14px;
    line-height: 16px;
    text-transform: uppercase;
    color: #000000;
    flex: none;
    order: 0;
    flex-grow: 0;
    margin: 0px 0px;
	}
.iu55
{
position: relative;
    left: -18px;
    top: -67px;
}
.it55
{
position: relative;
    width: 481px;
    height: 24px;
    left: 7px;
    top: -85px;
    font-family: Rubik;
    font-style: normal;
    font-weight: normal;
    font-size: 14px;
    line-height: 16px;
    color: #333333;
    flex: none;
    order: 1;
    flex-grow: 0;
    margin: 0px 10px;
}
.totalamount
		{
		position: relative;
    width: 148px;
    height: 28px;
    left: 146px;
    top: -69px;
    font-family: Rubik;
    font-style: normal;
    font-weight: 500;
    font-size: 17px;
    line-height: 20px;
    display: flex;
    align-items: center;
    text-transform: uppercase;
    color: #CE202F;
    flex: none;
    order: 1;
    flex-grow: 0;
    margin: 0px 24px;
	}
.editicon
		{
		position: relative;
    top: -85px;
    left: -12px;
	}
	.deleteicon
	{
	position: relative;
    top: -86px;
	}
.ticketno
		{
		position: relative;
    width: 95px;
    height: 24px;
    left: 40px;
    top: -108px;
    font-family: Rubik;
    font-style: normal;
    font-weight: normal;
    font-size: 14px;
    line-height: 16px;
    display: flex;
    align-items: center;
    text-transform: uppercase;
    color: #1F3D7B;
    flex: none;
    order: 2;
    flex-grow: 0;
    margin: 0px 8px;
	}
		.amountdetail
		{
		position: relative;
    width: 87px;
    height: 24px;
    left: -20px;
    top: -84px;
    font-family: Rubik;
    font-style: normal;
    font-weight: bold;
   font-size: 8px;
    line-height: 16px;
    display: flex;
    align-items: center;
    text-transform: uppercase;
    color: #CE202F;
    flex: none;
    order: 0;
    flex-grow: 0;
    margin: 0px 8px;
	}
.card-text44
		{
		position: relative;
    width: 221px;
    height: 24px;
    left: 96px;
    top: -130px;
    font-family: Rubik;
    font-style: normal;
    font-weight: bold;
   font-size: 14px;
    line-height: 16px;
    text-transform: uppercase;
    color: #000000;
    flex: none;
    order: 0;
    flex-grow: 0;
    margin: 8px 0px;
	}
	.card-text55
	{
	position: relative;
    width: 209px;
    height: 21px;
    left: 96px;
    top: -133px;
    font-family: Rubik;
    font-style: normal;
    font-weight: normal;
    font-size: 13px;
    line-height: 15px;
    color: #000000;
    flex: none;
    order: 1;
    flex-grow: 0;
    margin: 8px 0px;
	}
.logoimage11
		{
		position: relative;
    width: 95.41px;
    height: 109.1px;
    left: -33px;
    top: -42px;
    flex: none;
    order: 0;
    flex-grow: 0;
    margin: 0px 20px;
	}
.card-title22
		{
		position: relative;
    width: 183px;
    height: 38px;
    left: -10px;
    top: -37px;
    font-family: Rubik;
    font-style: normal;
    font-weight: bold;
    font-size: 22px;
    line-height: 26px;
    text-transform: uppercase;
    color: #000000;
    flex: none;
    order: 0;
    flex-grow: 0;
    margin: 24px 0px;
	}
.card124
		{
	display: flex;
    flex-direction: column;
    align-items: flex-start;
    padding: 48px;
    position: absolute;
    width: 654px;
    height: 538px;
    left: -56px;
    top: -62px;
    background: #FFFFFF;
    box-shadow: 0px 0px 12px rgb(0 0 0 / 25%);
    border-radius: 12px;
	}
.card123
		{
		display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: flex-start;
    padding: 48px;
    position: absolute;
    width: 441px;
    height: auto;
    left: 122px;
    top: -62px;
    background: #FFFFFF;
	box-shadow: 0px 0px 12px rgb(0 0 0 / 25%);
    border-radius: 12px;
	}
	#abc
		{
		font-family: Rubik;
    font-style: normal;
    font-weight: 900;
	}
.jack
		{
		font-family: Rubik;
    font-style: normal;
    font-weight: 900;
	}
	.jack2
	{
	font-family: Rubik;
    font-style: normal;
    font-weight: 900;
	}
	.button3
	{
	font-family: Rubik;
    font-style: normal;
    font-weight: 500;
	}
	.button4
	{
	font-family: Rubik;
    font-style: normal;
    font-weight: 500;
	}
.header {
    width: 100%;
    background-image:url("assets/img/yourcart.png");
    height: auto;
    min-height: 467px;
	position:relative;
	top:80px;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
}
}
@media (min-width: 768px) and (max-width: 1024px) {
	.linebreak13
			{
				position: relative;
    top: -155px;
    height: 2.78px;
    background: #CE202F;
			}
					.linebreak12
		{
		position: relative;
    top: -171px;
    height: 2.78px;
    background: #1F3D7B;
	}
	.cross990
			{
				position: relative;
    top: -111px;
    right: -70px;
    background-color: #FFFFFF;
    border-color: #FFFFFF;
    color: #C6C6C6;
			}
	.imaging11
			{
				position: relative;
    width: 22.27px;
    height: 22.27px;
    right: -16px;
    top: -96.38px;
    background: #FFFFFF;
    box-sizing: border-box;
    border-radius: 16.705px;
			}
			.point67
			{
				position: relative;
    width: 46.63px;
    height: 9.74px;
    left: 5.47px;
    top: -88.09px;
    font-family: Rubik;
    font-style: normal;
    font-weight: normal;
    font-size: 8.3525px;
    line-height: 10px;
    display: flex;
    align-items: center;
    text-transform: uppercase;
    color: #1F3D7B;
			}
.it
		{
		position: relative;
    top: 30px;
    right: -76px;
    font-family: Rubik;
    font-style: normal;
    font-weight: normal;
    font-size: 20px;
    line-height: 24px;
    color: #333333;
    flex: none;
    order: 1;
    flex-grow: 0;
    margin: 0px 10px;
	}
#movementcheckout
{
background: #CE202F;
    position: relative;
    top: 337px;
}
#movementcheckout22
{
background: #CE202F;
    position: relative;
    top: 337px;
}

		.button91
		{
	display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
    padding: 7px;
    position: absolute;
    width: 294px;
    height: 40px;
    left: 46px;
    top: 464px;
    background: #CE202F;
    border-radius: 4px;
    font-family: Rubik;
    font-style: normal;
    font-weight: 500;
    font-size: 19px;
    line-height: 24px;
    text-transform: uppercase;
    color: #FFFFFF;
    flex: none;
    order: 0;
    flex-grow: 0;
    margin: 0px 4px;
	}
		.card-title190
		{
		position: absolute;
    width: 374px;
    height: 38px;
    left: 48px;
    top: 48px;
    font-family: Rubik;
    font-style: normal;
    font-weight: bold;
    font-size: 22px;
    line-height: 26px;
    text-transform: uppercase;
    color: #000000;
	}
	#card-text3
	{
	font-family: Rubik;
    font-style: normal;
    font-weight: normal;
    font-size: 20px;
    line-height: 24px;
    color: #1F3D7B;
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
    padding: 20px;
    position: relative;
    width: 388px;
    height: 40px;
    left: -18px;
    top: -61px;
    background: #FFFFFF;
    opacity: 0.7;
    border: 1px solid #1F3D7B;
    box-sizing: border-box;
    border-radius: 4px;
    flex: none;
    order: 1;
    flex-grow: 0;
    margin: 12px 0px;
	}
	.card-title3
	{
	position: relative;
    width: 234px;
    height: 24px;
    left: -18px;
    top: -59px;
    font-family: Rubik;
    font-style: normal;
    font-weight: normal;
   font-size: 14px;
    line-height: 16px;
    text-transform: uppercase;
    color: #000000;
    flex: none;
    order: 0;
    flex-grow: 0;
    margin: 0px 0px;
	}
.iu55
{
position: relative;
    left: -18px;
    top: -67px;
}
.it55
{
position: relative;
    width: 481px;
    height: 24px;
    left: 7px;
    top: -85px;
    font-family: Rubik;
    font-style: normal;
    font-weight: normal;
   font-size: 14px;
    line-height: 16px;
    color: #333333;
    flex: none;
    order: 1;
    flex-grow: 0;
    margin: 0px 10px;
}
	
		.totalamount
		{
		position: relative;
    width: 148px;
    height: 28px;
    left: 146px;
    top: -69px;
    font-family: Rubik;
    font-style: normal;
    font-weight: 500;
    font-size: 17px;
    line-height: 20px;   
    display: flex;
    align-items: center;
    text-transform: uppercase;
    color: #CE202F;
    flex: none;
    order: 1;
    flex-grow: 0;
    margin: 0px 24px;
	}
		.editicon
		{
		position: relative;
    top: -85px;
    left: -12px;
	}
	.deleteicon
	{
	position: relative;
    top: -86px;
	}
		.ticketno
		{
		position: relative;
    width: 95px;
    height: 24px;
   left: 40px;
    top: -108px;
    font-family: Rubik;
    font-style: normal;
    font-weight: normal;
    font-size: 14px;
    line-height: 16px;
    display: flex;
    align-items: center;
    text-transform: uppercase;
    color: #1F3D7B;
    flex: none;
    order: 2;
    flex-grow: 0;
    margin: 0px 8px;
	}
		.amountdetail
		{
		position: relative;
    width: 87px;
    height: 24px;
    left: -20px;
    top: -84px;
    font-family: Rubik;
    font-style: normal;
    font-weight: bold;
   font-size: 8px;
    line-height: 16px;
    display: flex;
    align-items: center;
    text-transform: uppercase;
    color: #CE202F;
    flex: none;
    order: 0;
    flex-grow: 0;
    margin: 0px 8px;
	}
		.card-text44
		{
		position: relative;
    width: 221px;
    height: 24px;
    left: 96px;
    top: -130px;
    font-family: Rubik;
    font-style: normal;
    font-weight: bold;
    font-size: 14px;
    line-height: 16px;
    text-transform: uppercase;
    color: #000000;
    flex: none;
    order: 0;
    flex-grow: 0;
    margin: 8px 0px;
	}
	.card-text55
	{
	position: relative;
    width: 209px;
    height: 21px;
    left: 96px;
    top: -133px;
    font-family: Rubik;
    font-style: normal;
    font-weight: normal;
    font-size: 13px;
    line-height: 15px;
    color: #000000;
    flex: none;
    order: 1;
    flex-grow: 0;
    margin: 8px 0px;
	}
		.logoimage11
		{
		position: relative;
    width: 95.41px;
    height: 109.1px;
    left: -33px;
    top: -42px;
    flex: none;
    order: 0;
    flex-grow: 0;
    margin: 0px 20px;
	}
		.card-title22
		{
		position: relative;
    width: 183px;
    height: 38px;
    left: -10px;
    top: -37px;
    font-family: Rubik;
    font-style: normal;
    font-weight: bold;
    font-size: 22px;
    line-height: 26px;
    text-transform: uppercase;
    color: #000000;
    flex: none;
    order: 0;
    flex-grow: 0;
    margin: 24px 0px;
	}
		.card124
		{
		display: flex;
    flex-direction: column;
    align-items: flex-start;
    padding: 48px;
    position: absolute;
    width: 571px;
    height: 522px;
    left: -286px;
    top: 400px;
    background: #FFFFFF;
    box-shadow: 0px 0px 12px rgb(0 0 0 / 25%);
    border-radius: 12px;
	}
		.card123
		{
		display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: flex-start;
    padding: 48px;
    position: absolute;
    width: 441px;
    height: auto;
    left: 122px;
    top: -62px;
    background: #FFFFFF;
	box-shadow: 0px 0px 12px rgb(0 0 0 / 25%);
    border-radius: 12px;
	}
			#abc
		{
		font-family: Rubik;
    font-style: normal;
    font-weight: 900;
	}
		.jack
		{
		font-family: Rubik;
    font-style: normal;
    font-weight: 900;
	}
	.jack2
	{
	font-family: Rubik;
    font-style: normal;
    font-weight: 900;
	}
	.button3
	{
	font-family: Rubik;
    font-style: normal;
    font-weight: 500;
	}
	.button4
	{
	font-family: Rubik;
    font-style: normal;
    font-weight: 500;
	}
.header {
    width: 166%;
    background-image: url("assets/img/yourcart.png");
    height: auto;
    min-height: 467px;
    position: relative;
    top: 80px;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
}
}
@media (min-width: 768px) and (max-width: 1024px) and (orientation: landscape) {
	.linebreak13
			{
				position: relative;
    top: -155px;
    height: 2.78px;
    background: #CE202F;
			}
					.linebreak12
		{
		position: relative;
    top: -171px;
    height: 2.78px;
    background: #1F3D7B;
	}
.cross990
			{
				position: relative;
    top: -111px;
    right: -70px;
    background-color: #FFFFFF;
    border-color: #FFFFFF;
    color: #C6C6C6;
			}
.imaging11
			{
				position: relative;
    width: 22.27px;
    height: 22.27px;
    right: -16px;
    top: -96.38px;
    background: #FFFFFF;
    box-sizing: border-box;
    border-radius: 16.705px;
			}
			.point67
			{
				position: relative;
    width: 46.63px;
    height: 9.74px;
    left: 5.47px;
    top: -88.09px;
    font-family: Rubik;
    font-style: normal;
    font-weight: normal;
    font-size: 8.3525px;
    line-height: 10px;
    display: flex;
    align-items: center;
    text-transform: uppercase;
    color: #1F3D7B;
			}
.it
		{
		position: relative;
    top: 30px;
    right: -76px;
    font-family: Rubik;
    font-style: normal;
    font-weight: normal;
    font-size: 20px;
    line-height: 24px;
    color: #333333;
    flex: none;
    order: 1;
    flex-grow: 0;
    margin: 0px 10px;
	}
#movementcheckout
{
background: #CE202F;
    position: relative;
    top: 337px;
}
#movementcheckout22
{
background: #CE202F;
    position: relative;
    top: 337px;
}
		.button91
		{
		display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
    padding: 7px;
    position: absolute;
    width: 294px;
    height: 40px;
    left: 46px;
    top: 464px;
    background: #CE202F;
    border-radius: 4px;
    font-family: Rubik;
    font-style: normal;
    font-weight: 500;
    font-size: 19px;
    line-height: 24px;
    text-transform: uppercase;
    color: #FFFFFF;
    flex: none;
    order: 0;
    flex-grow: 0;
    margin: 0px 4px;
	}
		.card-title190
		{
		position: absolute;
    width: 374px;
    height: 38px;
    left: 48px;
    top: 48px;
    font-family: Rubik;
    font-style: normal;
    font-weight: bold;
   font-size: 22px;
    line-height: 26px;
    text-transform: uppercase;
    color: #000000;
	}
	#card-text3
	{
	font-family: Rubik;
    font-style: normal;
    font-weight: normal;
    font-size: 20px;
    line-height: 24px;
    color: #1F3D7B;
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
    padding: 20px;
    position: relative;
    width: 388px;
    height: 40px;
    left: -18px;
    top: -61px;
    background: #FFFFFF;
    opacity: 0.7;
    border: 1px solid #1F3D7B;
    box-sizing: border-box;
    border-radius: 4px;
    flex: none;
    order: 1;
    flex-grow: 0;
    margin: 12px 0px;
	}
	.card-title3
	{
	position: relative;
    width: 234px;
    height: 24px;
    left: -18px;
    top: -59px;
    font-family: Rubik;
    font-style: normal;
    font-weight: normal;
   font-size: 14px;
    line-height: 16px;
    text-transform: uppercase;
    color: #000000;
    flex: none;
    order: 0;
    flex-grow: 0;
    margin: 0px 0px;
	}
.iu55
{
position: relative;
    left: -18px;
    top: -67px;
}
.it55
{
position: relative;
    width: 481px;
    height: 24px;
    left: 7px;
    top: -85px;
    font-family: Rubik;
    font-style: normal;
    font-weight: normal;
  font-size: 14px;
    line-height: 16px;
    color: #333333;
    flex: none;
    order: 1;
    flex-grow: 0;
    margin: 0px 10px;
}
	
		.totalamount
		{
		position: relative;
    width: 148px;
    height: 28px;
    left: 146px;
    top: -69px;
    font-family: Rubik;
    font-style: normal;
    font-weight: 500;
    font-size: 17px;
    line-height: 20px;
    display: flex;
    align-items: center;
    text-transform: uppercase;
    color: #CE202F;
    flex: none;
    order: 1;
    flex-grow: 0;
    margin: 0px 24px;
	}
		.editicon
		{
		position: relative;
    top: -85px;
    left: -12px;
	}
	.deleteicon
	{
	position: relative;
    top: -86px;
	}
		.ticketno
		{
		position: relative;
    width: 95px;
    height: 24px;
    left: 40px;
    top: -108px;
    font-family: Rubik;
    font-style: normal;
    font-weight: normal;
    font-size: 14px;
    line-height: 16px;
    display: flex;
    align-items: center;
    text-transform: uppercase;
    color: #1F3D7B;
    flex: none;
    order: 2;
    flex-grow: 0;
    margin: 0px 8px;
	}
		.amountdetail
		{
		position: relative;
    width: 87px;
    height: 24px;
    left: -20px;
    top: -84px;
    font-family: Rubik;
    font-style: normal;
    font-weight: bold;
    font-size: 8px;
    line-height: 16px;
    display: flex;
    align-items: center;
    text-transform: uppercase;
    color: #CE202F;
    flex: none;
    order: 0;
    flex-grow: 0;
    margin: 0px 8px;
	}
		.card-text44
		{
		position: relative;
    width: 221px;
    height: 24px;
    left: 96px;
    top: -130px;
    font-family: Rubik;
    font-style: normal;
    font-weight: bold;
   font-size: 14px;
    line-height: 16px;
    text-transform: uppercase;
    color: #000000;
    flex: none;
    order: 0;
    flex-grow: 0;
    margin: 8px 0px;
	}
	.card-text55
	{
	position: relative;
    width: 209px;
    height: 21px;
    left: 96px;
    top: -133px;
    font-family: Rubik;
    font-style: normal;
    font-weight: normal;
    font-size: 13px;
    line-height: 15px;
    color: #000000;
    flex: none;
    order: 1;
    flex-grow: 0;
    margin: 8px 0px;
	}
		.logoimage11
		{
		position: relative;
    width: 95.41px;
    height: 109.1px;
    left: -33px;
    top: -42px;
    flex: none;
    order: 0;
    flex-grow: 0;
    margin: 0px 20px;
	}
		.card-title22
		{
		position: relative;
    width: 183px;
    height: 38px;
    left: -10px;
    top: -37px;
    font-family: Rubik;
    font-style: normal;
    font-weight: bold;
    font-size: 22px;
    line-height: 26px;
    text-transform: uppercase;
    color: #000000;
    flex: none;
    order: 0;
    flex-grow: 0;
    margin: 24px 0px;
	}
		.card124
		{
		display: flex;
    flex-direction: column;
    align-items: flex-start;
    padding: 48px;
    position: absolute;
    width: 571px;
    height: 522px;
    left: -286px;
    top: 400px;
    background: #FFFFFF;
    box-shadow: 0px 0px 12px rgb(0 0 0 / 25%);
    border-radius: 12px;
	}
		.card123
		{
		display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: flex-start;
    padding: 48px;
    position: absolute;
    width: 441px;
    height: auto;
    left: 122px;
    top: -62px;
    background: #FFFFFF;
	box-shadow: 0px 0px 12px rgb(0 0 0 / 25%);
    border-radius: 12px;
	}
			#abc
		{
		font-family: Rubik;
    font-style: normal;
    font-weight: 900;
	}
		.jack
		{
		font-family: Rubik;
    font-style: normal;
    font-weight: 900;
	}
	.jack2
	{
	font-family: Rubik;
    font-style: normal;
    font-weight: 900;
	}
	.button3
	{
	font-family: Rubik;
    font-style: normal;
    font-weight: 500;
	}
	.button4
	{
	font-family: Rubik;
    font-style: normal;
    font-weight: 500;
	}
.header {
    width: 166%;
    background-image: url("assets/img/yourcart.png");
    height: auto;
    min-height: 467px;
    position: relative;
    top: 80px;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
}
}
@media (min-width: 481px) and (max-width: 767px) {
	.linebreak13
			{
				position: relative;
    top: -155px;
    height: 2.78px;
    background: #CE202F;
			}
					.linebreak12
		{
		position: relative;
    top: -171px;
    height: 2.78px;
    background: #1F3D7B;
	}
	.cross990
			{
				position: relative;
    top: -111px;
    right: -70px;
    background-color: #FFFFFF;
    border-color: #FFFFFF;
    color: #C6C6C6;
			}
	.imaging11
			{
				position: relative;
    width: 22.27px;
    height: 22.27px;
    right: -16px;
    top: -96.38px;
    background: #FFFFFF;
    box-sizing: border-box;
    border-radius: 16.705px;
			}
			.point67
			{
				position: relative;
    width: 46.63px;
    height: 9.74px;
    left: 5.47px;
    top: -88.09px;
    font-family: Rubik;
    font-style: normal;
    font-weight: normal;
    font-size: 8.3525px;
    line-height: 10px;
    display: flex;
    align-items: center;
    text-transform: uppercase;
    color: #1F3D7B;
			}
.it
		{
		position: relative;
    top: 30px;
    right: -76px;
    font-family: Rubik;
    font-style: normal;
    font-weight: normal;
    font-size: 20px;
    line-height: 24px;
    color: #333333;
    flex: none;
    order: 1;
    flex-grow: 0;
    margin: 0px 10px;
	}
#movementcheckout
{
background: #CE202F;
    position: relative;
    top: 336px;
}
#movementcheckout22
{
background: #CE202F;
    position: relative;
    top: 226px;
}

		.button91
		{
		display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
    padding: 7px;
    position: absolute;
    width: 294px;
    height: 40px;
    left: 46px;
    top: 464px;
    background: #CE202F;
    border-radius: 4px;
    font-family: Rubik;
    font-style: normal;
    font-weight: 500;
    font-size: 19px;
    line-height: 24px;
    text-transform: uppercase;
    color: #FFFFFF;
    flex: none;
    order: 0;
    flex-grow: 0;
    margin: 0px 4px;
	}
		.card-title190
		{
		position: absolute;
    width: 374px;
    height: 38px;
    left: 48px;
    top: 48px;
    font-family: Rubik;
    font-style: normal;
    font-weight: bold;
    font-size: 22px;
    line-height: 26px;
    text-transform: uppercase;
    color: #000000;
	}
	#card-text3
	{
	font-family: Rubik;
    font-style: normal;
    font-weight: normal;
    font-size: 20px;
    line-height: 24px;
    color: #1F3D7B;
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
    padding: 20px;
    position: relative;
    width: 388px;
    height: 40px;
    left: -18px;
    top: -61px;
    background: #FFFFFF;
    opacity: 0.7;
    border: 1px solid #1F3D7B;
    box-sizing: border-box;
    border-radius: 4px;
    flex: none;
    order: 1;
    flex-grow: 0;
    margin: 12px 0px;
	}
	.card-title3
	{
	position: relative;
    width: 234px;
    height: 24px;
    left: -18px;
    top: -59px;
    font-family: Rubik;
    font-style: normal;
    font-weight: normal;
   font-size: 14px;
    line-height: 16px;
    text-transform: uppercase;
    color: #000000;
    flex: none;
    order: 0;
    flex-grow: 0;
    margin: 0px 0px;
	}
.iu55
{
position: relative;
    left: -18px;
    top: -67px;
}
.it55
{
position: relative;
    width: 481px;
    height: 24px;
    left: 7px;
    top: -85px;
    font-family: Rubik;
    font-style: normal;
    font-weight: normal;
   font-size: 14px;
    line-height: 16px;
    color: #333333;
    flex: none;
    order: 1;
    flex-grow: 0;
    margin: 0px 10px;
}
	
		.totalamount
		{
		position: relative;
    width: 148px;
    height: 28px;
    left: 146px;
    top: -69px;
    font-family: Rubik;
    font-style: normal;
    font-weight: 500;
   font-size: 17px;
    line-height: 20px;
    display: flex;
    align-items: center;
    text-transform: uppercase;
    color: #CE202F;
    flex: none;
    order: 1;
    flex-grow: 0;
    margin: 0px 24px;
	}
		.editicon
		{
		position: relative;
    top: -85px;
    left: -12px;
	}
	.deleteicon
	{
	position: relative;
    top: -86px;
	}
		.ticketno
		{
		position: relative;
    width: 95px;
    height: 24px;
   left: 40px;
    top: -108px;
    font-family: Rubik;
    font-style: normal;
    font-weight: normal;
    font-size: 14px;
    line-height: 16px;
    display: flex;
    align-items: center;
    text-transform: uppercase;
    color: #1F3D7B;
    flex: none;
    order: 2;
    flex-grow: 0;
    margin: 0px 8px;
	}
		.amountdetail
		{
		position: relative;
    width: 87px;
    height: 24px;
    left: -20px;
    top: -84px;
    font-family: Rubik;
    font-style: normal;
    font-weight: bold;
    font-size: 8px;
    line-height: 16px;
    display: flex;
    align-items: center;
    text-transform: uppercase;
    color: #CE202F;
    flex: none;
    order: 0;
    flex-grow: 0;
    margin: 0px 8px;
	}
		.card-text44
		{
		position: relative;
    width: 221px;
    height: 24px;
    left: 96px;
    top: -130px;
    font-family: Rubik;
    font-style: normal;
    font-weight: bold;
    font-size: 14px;
    line-height: 16px;
    text-transform: uppercase;
    color: #000000;
    flex: none;
    order: 0;
    flex-grow: 0;
    margin: 8px 0px;
	}
	.card-text55
	{
	position: relative;
    width: 209px;
    height: 21px;
    left: 96px;
    top: -133px;
    font-family: Rubik;
    font-style: normal;
    font-weight: normal;
   font-size: 13px;
    line-height: 15px;
    color: #000000;
    flex: none;
    order: 1;
    flex-grow: 0;
    margin: 8px 0px;
	}
		.logoimage11
		{
		position: relative;
    width: 95.41px;
    height: 109.1px;
    left: -33px;
    top: -42px;
    flex: none;
    order: 0;
    flex-grow: 0;
    margin: 0px 20px;
	}
		.card-title22
		{
		position: relative;
    width: 183px;
    height: 38px;
    left: -10px;
    top: -37px;
    font-family: Rubik;
    font-style: normal;
    font-weight: bold;
    font-size: 22px;
    line-height: 26px;
    text-transform: uppercase;
    color: #000000;
    flex: none;
    order: 0;
    flex-grow: 0;
    margin: 24px 0px;
	}
		.card124
		{
		display: flex;
    flex-direction: column;
    align-items: flex-start;
    padding: 48px;
    position: absolute;
    width: 571px;
    height: 522px;
    left: -286px;
    top: 400px;
    background: #FFFFFF;
    box-shadow: 0px 0px 12px rgb(0 0 0 / 25%);
    border-radius: 12px;
	}
		.card123
		{
		display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: flex-start;
    padding: 48px;
    position: absolute;
    width: 441px;
    height: auto;
    left: 122px;
    top: -62px;
    background: #FFFFFF;
	box-shadow: 0px 0px 12px rgb(0 0 0 / 25%);
    border-radius: 12px;
	}
			#abc
		{
		font-family: Rubik;
    font-style: normal;
    font-weight: 900;
	}
		.jack
		{
		font-family: Rubik;
    font-style: normal;
    font-weight: 900;
	}
	.jack2
	{
	font-family: Rubik;
    font-style: normal;
    font-weight: 900;
	}
	.button3
	{
	font-family: Rubik;
    font-style: normal;
    font-weight: 500;
	}
	.button4
	{
	font-family: Rubik;
    font-style: normal;
    font-weight: 500;
	}
.header {
   width: 211%;
    background-image: url("assets/img/yourcart.png");
    height: auto;
    min-height: 467px;
    position: relative;
    top: 80px;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
}
}
@media (min-width: 320px) and (max-width: 480px) {
	.linebreak13
			{
				position: relative;
    top: -155px;
    height: 2.78px;
    background: #CE202F;
			}
					.linebreak12
		{
		position: relative;
    top: -171px;
    height: 2.78px;
    background: #1F3D7B;
	}
	.cross990
			{
				position: relative;
    top: -111px;
    right: -70px;
    background-color: #FFFFFF;
    border-color: #FFFFFF;
    color: #C6C6C6;
			}
	.imaging11
			{
				position: relative;
    width: 22.27px;
    height: 22.27px;
    right: -16px;
    top: -96.38px;
    background: #FFFFFF;
    box-sizing: border-box;
    border-radius: 16.705px;
			}
			.point67
			{
				position: relative;
    width: 46.63px;
    height: 9.74px;
    left: 5.47px;
    top: -88.09px;
    font-family: Rubik;
    font-style: normal;
    font-weight: normal;
    font-size: 8.3525px;
    line-height: 10px;
    display: flex;
    align-items: center;
    text-transform: uppercase;
    color: #1F3D7B;
			}
.it
		{
		position: relative;
    top: 30px;
    right: -76px;
    font-family: Rubik;
    font-style: normal;
    font-weight: normal;
    font-size: 20px;
    line-height: 24px;
    color: #333333;
    flex: none;
    order: 1;
    flex-grow: 0;
    margin: 0px 10px;
	}
#movementcheckout22
{
position: relative;
    bottom: -150px;
    width: 135%;
}
#movementcheckout
{
position: relative;
    bottom: -273px;
    width: 118%;
}
		.button91
		{
		display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
    padding: 7px;
    position: absolute;
    width: 294px;
    height: 40px;
    left: 46px;
    top: 464px;
    background: #CE202F;
    border-radius: 4px;
    font-family: Rubik;
    font-style: normal;
    font-weight: 500;
    font-size: 19px;
    line-height: 24px;
    text-transform: uppercase;
    color: #FFFFFF;
    flex: none;
    order: 0;
    flex-grow: 0;
    margin: 0px 4px;
	}
		.card-title190
		{
		position: absolute;
    width: 374px;
    height: 38px;
    left: 48px;
    top: 48px;
    font-family: Rubik;
    font-style: normal;
    font-weight: bold;
    font-size: 22px;
    line-height: 26px;
    text-transform: uppercase;
    color: #000000;
	}
	#card-text3
	{
	font-family: Rubik;
    font-style: normal;
    font-weight: normal;
    font-size: 20px;
    line-height: 24px;
    color: #1F3D7B;
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
    padding: 20px;
    position: relative;
    width: 388px;
    height: 40px;
    left: -18px;
    top: -61px;
    background: #FFFFFF;
    opacity: 0.7;
    border: 1px solid #1F3D7B;
    box-sizing: border-box;
    border-radius: 4px;
    flex: none;
    order: 1;
    flex-grow: 0;
    margin: 12px 0px;
	}
	.card-title3
	{
	position: relative;
    width: 234px;
    height: 24px;
    left: -18px;
    top: -59px;
    font-family: Rubik;
    font-style: normal;
    font-weight: normal;
    font-size: 14px;
    line-height: 16px;
    text-transform: uppercase;
    color: #000000;
    flex: none;
    order: 0;
    flex-grow: 0;
    margin: 0px 0px;
	}
.iu55
{
position: relative;
    left: -18px;
    top: -67px;
}
.it55
{
position: relative;
    width: 481px;
    height: 24px;
    left: 7px;
    top: -85px;
    font-family: Rubik;
    font-style: normal;
    font-weight: normal;
    font-size: 14px;
    line-height: 16px;
  
    color: #333333;
    flex: none;
    order: 1;
    flex-grow: 0;
    margin: 0px 10px;
}
	
		.totalamount
		{
		position: relative;
    width: 148px;
    height: 28px;
    left: 146px;
    top: -69px;
    font-family: Rubik;
    font-style: normal;
    font-weight: 500;
    font-size: 17px;
    line-height: 20px;
    display: flex;
    align-items: center;
    text-transform: uppercase;
    color: #CE202F;
    flex: none;
    order: 1;
    flex-grow: 0;
    margin: 0px 24px;
	}
		.editicon
		{
		position: relative;
    top: -85px;
    left: -12px;
	}
	.deleteicon
	{
	position: relative;
    top: -86px;
	}
		.ticketno
		{
		position: relative;
    width: 95px;
    height: 24px;
   left: 40px;
    top: -108px;
    font-family: Rubik;
    font-style: normal;
    font-weight: normal;
    font-size: 14px;
    line-height: 16px;
    display: flex;
    align-items: center;
    text-transform: uppercase;
    color: #1F3D7B;
    flex: none;
    order: 2;
    flex-grow: 0;
    margin: 0px 8px;
	}
		.amountdetail
		{
		position: relative;
    width: 87px;
    height: 24px;
    left: -20px;
    top: -84px;
    font-family: Rubik;
    font-style: normal;
    font-weight: bold;
   font-size: 8px;
    line-height: 16px;
    display: flex;
    align-items: center;
    text-transform: uppercase;
    color: #CE202F;
    flex: none;
    order: 0;
    flex-grow: 0;
    margin: 0px 8px;
	}
		.card-text44
		{
		position: relative;
    width: 221px;
    height: 24px;
    left: 96px;
    top: -130px;
    font-family: Rubik;
    font-style: normal;
    font-weight: bold;
   font-size: 14px;
    line-height: 16px;
    text-transform: uppercase;
    color: #000000;
    flex: none;
    order: 0;
    flex-grow: 0;
    margin: 8px 0px;
	}
	.card-text55
	{
	position: relative;
    width: 209px;
    height: 21px;
    left: 96px;
    top: -133px;
    font-family: Rubik;
    font-style: normal;
    font-weight: normal;
  font-size: 13px;
    line-height: 15px;
    color: #000000;
    flex: none;
    order: 1;
    flex-grow: 0;
    margin: 8px 0px;
	}
		.logoimage11
		{
		position: relative;
    width: 95.41px;
    height: 109.1px;
    left: -33px;
    top: -42px;
    flex: none;
    order: 0;
    flex-grow: 0;
    margin: 0px 20px;
	}
		.card-title22
		{
		position: relative;
    width: 183px;
    height: 38px;
    left: -10px;
    top: -37px;
    font-family: Rubik;
    font-style: normal;
    font-weight: bold;
   font-size: 22px;
    line-height: 26px;
    text-transform: uppercase;
    color: #000000;
    flex: none;
    order: 0;
    flex-grow: 0;
    margin: 24px 0px;
	}
		.card124
		{
		display: flex;
    flex-direction: column;
    align-items: flex-start;
    padding: 48px;
    position: absolute;
    width: 571px;
    height: 522px;
    left: 32px;
    top: 351px;
    background: #FFFFFF;
    box-shadow: 0px 0px 12px rgb(0 0 0 / 25%);
    border-radius: 12px;
	}
		.card123
		{
		display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: flex-start;
    padding: 48px;
    position: absolute;
    width: 393px;
    height: auto;
    left: 33px;
    top: -101px;
    background: #FFFFFF;
    box-shadow: 0px 0px 12px rgb(0 0 0 / 25%);
    border-radius: 12px;
	}
			#abc
		{
		font-family: Rubik;
    font-style: normal;
    font-weight: 900;
	}
		.jack
		{
		font-family: Rubik;
    font-style: normal;
    font-weight: 900;
	}
	.jack2
	{
	font-family: Rubik;
    font-style: normal;
    font-weight: 900;
	}
	.button3
	{
	font-family: Rubik;
    font-style: normal;
    font-weight: 500;
	}
	.button4
	{
	font-family: Rubik;
    font-style: normal;
    font-weight: 500;
	}
.header {
    width: 352%;
    background-image:url("assets/img/yourcart.png");
    height: auto;
    min-height: 467px;
	position:relative;
	top:80px;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
}
}
</style>
    </head>
	<body class="best" style="margin:auto;width:1440px">
   <header id="home" class="header">
        <nav class="fixed-top navbar">
            <img class="logo" src="assets/img/WPFC Logo.png" alt="logo" />
	<a href="index.php" style="text-decoration:none;color: #CE202F;" id="imageheader">PREMIER LOTTERY</a>
            <div class="nav-items">
                 <a href="aboutus.php" class="nav-item active" aria-current="page" style="text-decoration:none;color:#CE202F;">ABOUT</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="raffleprizes.php" class="nav-item" style="text-decoration:none;color:#CE202F;">PRIZES</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="faq.php" class="nav-item" style="text-decoration:none;color:#CE202F;">FAQS</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				 <a href="t&c.php" class="nav-item" style="text-decoration:none;color:#CE202F;">T&C</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				 <a href="contactus.php" class="nav-item" style="text-decoration:none;color:#CE202F;">CONTACT US</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				 <button class="btn btn-outline-danger" id="abc" type="button" data-toggle="modal" data-target="#myModal">PARTNER LOGIN</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				 <a href="buytickets.php"><button class="btn btn-outline-danger active" id="abc" type="button">BUY TICKETS</button></a>
            </div>
        </nav>
		<hr class="linebreak13">
		<hr class="linebreak12">
	<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
	   <form action="insert.php" method="POST" enctype="multipart/form-data">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Login to Dashboard</h4>
        </div>
        <div class="modal-body">
		<div class="form-group">
		<label for="mailid" class="mailad">ENTER YOUR EMAIL ADDRESS</label>
		<br>
		
  <input type="text" id="mailid1" name="mailid2" placeholder="JON@DOE.COM">
  </div>
  <div class="form-group">
  <label for="pw" class="pdf">ENTER THE PASSWORD</label>
  <br>
  <input type="password" id="pwd" name="pwd2" placeholder="****************">
  </div>
  <div class="form-group">
  <label for="lgf" class="lgf2">LOGIN AS</label>
  <br>
  <select id="presentlist" name="abc">
    <option value="PARTNER" style="display: flex;flex-direction: row;align-items: center;padding: 20px;position: static;width: 387px;height: 40px;left: 0px;top: 0px;background: #FFDDE0;border: 1px solid #CE202F;box-sizing: border-box;border-radius: 0px 0px 4px 4px;flex: none;order: 0;flex-grow: 0;margin: 0px 0px;font-family: Rubik;font-style: normal;font-weight: normal;color: #1F3D7B;">PARTNER</option>
    <option value="ADMINISTRATOR" style="display: flex;flex-direction: row;align-items: center;padding: 20px;position: static;width: 387px;height: 40px;left: 0px;top: 40px;background: #FFFFFF;border-radius: 0px 0px 4px 4px;flex: none;order: 1;flex-grow: 0;margin: 0px 0px;font-family: Rubik;font-style: normal;font-weight: normal;font-size: 20px;line-height: 24px;text-transform: uppercase;color: #1F3D7B;">ADMINISTRATOR</option>
  </select>
  </div>
  <br>
  <br>
  <input type="checkbox" name="terms" id="terms" onchange="activateButton2(this)" style="position: relative;width: 18px;right: -61px;top: 56px;" checked><p class="it">stay signed in on this machine</p>
  <br>
  <br>
  <input type="hidden" name="taskhbc" value="add">
        <div class="modal-footer">
		<div class="form-group">
		 <input type="submit" id="tasksbutton2" class="btn btn-default" value="LOGIN"> 
		  <button type="btn btn-outline-danger" id="tasksbutton3" class="btn btn-default" data-dismiss="modal" data-toggle="modal" data-target="#myModal2">FORGOT PASSWORD</button>
		  </div>
        </div>
      </div>
      
    </div>
	</form>
  </div>
  </div>
        
    </header>
 <script>

  function activateButton2(element) {

      if(element.checked) {
        document.getElementById("tasksbutton2").disabled = false;
       }
       else  {
        document.getElementById("tasksbutton2").disabled = true;
      }

  }
</script>
 <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
	  <form action="insert.php" method="POST" enctype="multipart/form-data">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Recover Password</h4>
        </div>
        <div class="modal-body">
		<div class="form-group">
		<label for="mailid" class="mailad">ENTER YOUR REGISTERED EMAIL ADDRESS</label>
		<br>
		
  <input type="text" id="mailid1" name="mailid2" placeholder="JON@DOE.COM">
  </div>
  <input type="hidden" name="tasktqc" value="add">
        <div class="modal-footer">
		<div class="form-group">
		 <input type="submit" id="tasksbutton087" class="btn btn-default" value="SUBMIT">
        </div>
      </div>
      
    </div>
  </div>
  </form>
  </div>
  </div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
</div>
<br>
<br>
<div class="row">
  <div class="col-sm-6">
    <div class="card123">
      <div class="card-body">
        <h5 class="card-title22">YOUR CART</h5>
        <img src="assets/img/wpfcsmalllogo.png" class="logoimage11">
		<p class="card-text44">WPFC RAFFLE TICKETS</p>
		<p class="card-text55"><?php echo (date('D, d M Y')); ?></p>
		<?php
		$kk="0.00";
				$mm="0 Ticket";
				$nn="0.00";
                    include("database.php");
                    $q="select * from cart_information";
                    $result=mysqli_query($con,$q);
                            while($row=mysqli_fetch_array($result))
                            {
					
                ?>	
        <p class="amountdetail"><?php if($row){echo ($row['ticket_price']);} else { echo $kk; } ?>&nbsp;- <?php if($row){echo ($row['no_of_tickets']);} else { echo $mm; } ?>
		<form action="insert.php" method="POST" enctype="multipart/form-data">
			<input type="hidden" name="hello990" value="add997">
			<input type="hidden" name="id" value="<?php echo $row['ID']; ?>">
			<input type="submit" value="x" class="cross990">
		</form>
		</p>
							<?php } ?>
							<?php
							include("database.php");
                            $query = "select SUM(ticket_price_integer) as 'price' from cart_information ";
                            $query_result=mysqli_query($con,$query);
                            $row=mysqli_fetch_array($query_result);
							?>

		<p class="totalamount">TOTAL:&nbsp;<?php if($row){echo "$".$row['price'];} else { echo money_format("%(#10n","0.00"); } ?></p>
		<div class="buttonspecial">
		<a href="buytickets.php" style="text-decoration:none"><img src="assets/img/addticketicon.png" class="imaging11">
		<h5 class="point67">ADD TICKET</h5></a>
		</div>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card124">
      <div class="card-body">
	  <form action="insert.php" method="POST" enctype="multipart/form-data">
        <h4 class="card-title190">CONTINUE TO PAYMENT</h4>
									<br>
									<br>
									<br>
									<br>
									
									<label for="fullmail" class="card-title3">ENTER YOUR EMAIL ADDRESS</label>
									<div class="form-group">
									<input type="text" id="card-text3" name="eaddress" placeholder="jon@doe.com" style="font-family: Rubik;font-style: normal;font-weight: normal;font-size: 20px;line-height: 24px;color: #1F3D7B;" required>
									</div>
									
									<label for="mail" class="card-title3">ENTER YOUR FULL NAME</label>
									<div class="form-group">
                                    <input type="text" id="card-text3" name="fname" placeholder="your full name" style="font-family: Rubik;font-style: normal;font-weight: normal;font-size: 20px;line-height: 24px;color: #1F3D7B;" required>
									</div>
									
									<label for="phonenumber" class="card-title3">ENTER YOUR PHONE NUMBER</label>
									<div class="form-group">
                                    <input type="text" id="card-text3" name="pno" placeholder="+63 1234 1234 45" style="font-family: Rubik;font-style: normal;font-weight: normal;font-size: 20px;line-height: 24px;color: #1F3D7B;">
									</div>
									<br>
									<?php
                            include("database.php");
                            $query6= "select SUM(ticket_price_integer) as 'price22',SUM(no_of_tickets) as 'total_ticket22' from cart_information; ";
                            $query_result55=mysqli_query($con,$query6);
                            $row39=mysqli_fetch_array($query_result55); 
                          ?>

                        <div class="modal-total-price">
                            <input type="hidden" name="total_amountinfo" id="total_amountinfo2" value="<?php echo $row39['price22']; ?>">
                            <input type="hidden" name="total_ticketinfo" id="total_ticketinfo2" value="<?php echo $row39['total_ticket22']; ?>">
							<input type="hidden" name="ticket_purchased_from" id="total_ticketinfo3" value="Online">
                        </div>
									
									<input type="checkbox" name="terms" id="terms" onchange="activateButton(this)" style="position: relative;top: -65px;width: 18px;right: 4px;"><p class="it55">I have read and understood the Terms & Conditions.</p>
									<br>
                                    <input type="hidden" name="helloaustralia" value="add">
									<input type="submit" id="kbc11" class="button91" value="PROCEED TO CHECKOUT &#8594;">
									</form>
      </div>
    </div>
  </div>
</div>
<script>

  function activateButton(element) {

      if(element.checked) {
        document.getElementById("kbc11").disabled = false;
       }
       else  {
        document.getElementById("kbc11").disabled = true;
      }

  }
</script>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<footer class="bg-light3 text-center text-lg-start" style="background:#CE202F;" id="movementcheckout">
  <!-- Grid container -->
  <div class="container p-4 pb-0" id="footsection">
    <form action="">
      <!--Grid row-->
      <div class="row">
        <!--Grid column-->
        <div class="col-auto mb-4 mb-md-0">
          <p class="pt-2" id="p3">CHECK IF YOU WON</p>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-5 col-12 mb-4 mb-md-0">
          <!-- Email input -->
          <div class="form-outline mb-4">
            <input type="email" id="form5Example2" class="form-control" placeholder="ENTER TICKET NUMBER" />
            
          </div>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-auto mb-4 mb-md-0">
          <!-- Submit button -->
          <button class="button3">CHECK &#8594;</button>
        </div>
        <!--Grid column-->
      </div>
      <!--Grid row-->
    </form>
  </div>
  <!-- Grid container -->
</footer>
<footer class="bg-light2 text-center text-lg-start" style="background-color:#1F3D7B;" id="movementcheckout22">
  <!-- Grid container -->
  <div class="container p-4 pb-0" id="footsection2">
    <form action="">
      <!--Grid row-->
      <div class="row">
        <!--Grid column-->
        <div class="col-auto mb-4 mb-md-0">
          <p class="pt-3" id="p4">WE WOULD LOVE TO HEAR FROM YOU</p>
        </div>
        <!--Grid column-->
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-auto mb-4 mb-md-0">
          <!-- Submit button -->
          <button class="button4"><a href="contactus.php" style="text-decoration:none;color:#FFFFFF;">CONTACT US &#8594;</a></button>
        </div>
        <!--Grid column-->
      </div>
      <!--Grid row-->
    </form>
  </div>
  <!-- Grid container -->
</footer>
<footer class="page-footer font-small stylish-color-dark pt-4" id="attribute" style="background-color:white">

  <!-- Footer Links -->
  <div class="container text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-3 mx-auto">

        <!-- Links -->
       <h5 class="font-weight-bold text-uppercase mt-3 mb-4" id="faqrelated">FAQS</h5>

        <ul class="list-unstyled">
          <li>
            <p id="menuitem">IS THIS A REGISTERED LOTTERY PROGRAM? &nbsp;&nbsp;+</p>
          </li>
          <li>
            <p id="menuitem">HOW MANY TICKETS ARE THERE? &nbsp;&nbsp;+</p>
          </li>
            <p id="menuitem">HOW MUCH IS THE PRIZE POOL WORTH? &nbsp;&nbsp;+</p>
          </li>
          <li>
            <p id="menuitem">WHERE CAN I BUY TICKETS? &nbsp;&nbsp;+</p>
          </li>
		  <li>
           <p id="menuitem">CAN TICKETS WIN MULTIPLE PRIZES? &nbsp;&nbsp;+</p>
          </li>
		  <li>
           <button class="button5"><a href="faq.php" style="text-decoration:none;color:#CE202F;">MORE QUESTIONS &#8594;</button>
          </li>
		  <br>
		  <li>
           <p id="menuitem2">WE ACCEPT THESE PAYMENT METHODS</p>
		   <img src="assets/img/MasterCard_Logo 1.png" class="image1">&nbsp;&nbsp;&nbsp;
		   <img src="assets/img/Visa_Inc._logo 1.png" class="image2">
          </li>
		  <li>
           <a href="t&c.php" id="menuitem3" style="text-decoration:none;">Terms and Conditions | </a>
		    <a href="contactus.php" id="menuitem3" style="text-decoration:none;">Customer Support | </a>
			 <a href="privacypolicy.php" id="menuitem3" style="text-decoration:none;">Privacy Policy </a>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-3 mx-auto">

        <!-- Links -->
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4" id="faqrelated">GET IN TOUCH</h5>

        <ul class="list-unstyled" style="color:white">
          <li>
            <img src="assets/img/telimage.png">&nbsp;&nbsp;<a href="#!" style="font-family: Rubik;font-style: normal;font-weight: bold;font-size: 12px;line-height: 24px;text-transform: uppercase;color: #1F3D7B;">1800 1234 5678</a>
          </li>
		  <br>
          <li>
            <img src="assets/img/instagram.png"><img src="assets/img/circle2.png" class="circle1"><img src="assets/img/circle1.png" class="circle2">&nbsp;&nbsp;<a href="#!" style="font-family: Rubik;position:relative;left:-17px;font-style: normal;font-weight: bold;font-size: 12px;line-height: 24px;text-transform: uppercase;color: #1F3D7B;"><u>@PREMIERLOTTERY</u></a>
          </li>
		  <br>
          <li>
            <img src="assets/img/facebook.png">&nbsp;&nbsp;<a href="#!" style="font-family: Rubik;font-style: normal;font-weight: bold;font-size: 12px;line-height: 24px;text-transform: uppercase;color: #1F3D7B;"><u>FACEBOOK.COM/PREMIERLOTTERY</u></a>
          </li>
		  <br>
          <li>
            <img src="assets/img/youtube.png"><img src="assets/img/triangle.png" class="triangle">&nbsp;&nbsp;<a href="#!" style="font-family: Rubik;position:relative;left:-8px;font-style: normal;font-weight: bold;font-size: 12px;line-height: 24px;text-transform: uppercase;color: #1F3D7B;"><u>YOUTUBE.COM/PREMIERLOTTERY</u></a>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <hr>
  <!-- Copyright -->
  <div>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
        <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes)-->
        <div class="scroll-to-top d-lg-none position-fixed"><a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top"><i class="fa fa-chevron-up"></i></a></div>
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Contact form JS-->
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>