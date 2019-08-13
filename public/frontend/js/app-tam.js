if(window.innerWidth <= 425){
/* test kích thước màn hình */
console.log(window.innerWidth + " < = 425" );
/* ------------------------ */
	var angleDown = document.querySelectorAll('.footer-body-service-title');
	var footerLink  = document.querySelectorAll('.footer-body-service-link');
	var angleDownPolicy = document.querySelectorAll('.footer-body-policy-block-mobile');
	var policy = document.querySelectorAll('.footer-privacy-policy-hidden');

	angleDown[0].addEventListener('click', collapseShowItemOur);
	angleDown[1].addEventListener('click', collapseShowItemBuy);
	angleDown[2].addEventListener('click', collapseShowItemSell);
	angleDown[3].addEventListener('click', collapseShowItemHelp);
	angleDown[4].addEventListener('click', collapseShowItemVestiaire);

	angleDownPolicy[0].addEventListener('click', collapseShowPolicy);


	function collapseShowItemOur(){
		if(footerLink[0].style.display === "block"){
			footerLink[0].style.display = "none";
			footerLink[0].classList.remove('transitionCollapse');
			angleDown[0].classList.remove('rotateAngleDown');
		}
		else{
			footerLink[0].style.display = "block";
			footerLink[0].classList.add('transitionCollapse');
			angleDown[0].classList.add('rotateAngleDown');
		}
	}

	function collapseShowItemBuy(){
		if(footerLink[1].style.display === "block"){
			footerLink[1].style.display = "none";
			footerLink[1].classList.remove('transitionCollapse');
			angleDown[1].classList.remove('rotateAngleDown');
		}
		else{
			footerLink[1].style.display = "block";
			footerLink[1].classList.add('transitionCollapse');
			angleDown[1].classList.add('rotateAngleDown');
		}
	}

	function collapseShowItemSell(){
		if(footerLink[2].style.display === "block"){
			footerLink[2].style.display = "none";
			footerLink[2].classList.remove('transitionCollapse');
			angleDown[2].classList.remove('rotateAngleDown');
		}
		else{
			footerLink[2].style.display = "block";
			footerLink[2].classList.add('transitionCollapse');
			angleDown[2].classList.add('rotateAngleDown');
		}
	}

	function collapseShowItemHelp(){
		if(footerLink[3].style.display === "block"){
			footerLink[3].style.display = "none";
			footerLink[3].classList.remove('transitionCollapse');
			angleDown[3].classList.remove('rotateAngleDown');
		}
		else{
			footerLink[3].style.display = "block";
			footerLink[3].classList.add('transitionCollapse');
			angleDown[3].classList.add('rotateAngleDown');
		}
	}

	function collapseShowItemVestiaire(){
		if(footerLink[4].style.display === "block"){
			footerLink[4].style.display = "none";
			footerLink[4].classList.remove('transitionCollapse');
			angleDown[4].classList.remove('rotateAngleDown');
		}
		else{
			footerLink[4].style.display = "block";
			footerLink[4].classList.add('transitionCollapse');
			angleDown[4].classList.add('rotateAngleDown');
		}
	}

	function collapseShowPolicy(){
		if(policy[0].style.display === "block"){
			policy[0].style.display = "none";
			policy[0].classList.remove('transitionCollapse');
			document.querySelectorAll('.footer-privacy-policy')[0].classList.remove('rotateAngleDown');
		}
		else{
			policy[0].style.display = "block";
			policy[0].classList.add('transitionCollapse');
			document.querySelectorAll('.footer-privacy-policy')[0].classList.add('rotateAngleDown');
		}
	}
}


/* --------------- Show Hide Modal Footer ------------ */
var modalFt = document.getElementById('modal-footer'); // khi click ra ngoai thi dong modal
var modalCt = document.getElementById('modal-content'); // show hidden modal-content
var close = document.getElementById('close');
var openModal = document.getElementById('open-modal') // click vao open modal
openModal.addEventListener('click', showModalFT);
function showModalFT(){
	if(modalFt.style.display === "block"){
		modalFt.classList.remove('showModal');
	}
	else{
		modalFt.classList.add('showModal');
	}
}

// close close modal
close.addEventListener('click', closeModalFt);
function closeModalFt(){
	modalFt.classList.remove('showModal');
}

// click o ngoai
modalFt.addEventListener('click', closeModalFtOutside);
function closeModalFtOutside(event){
	if((event.clientY < modalCt.offsetTop || event.clientY > modalCt.offsetTop + 343) || (event.clientX < modalCt.offsetLeft || event.clientX > modalCt.offsetLeft + 600))
	{
		modalFt.classList.remove('showModal');
		
	/*	console.log('clientY ' + event.clientY + " < " + modalCt.offsetTop);
		console.log('clientY ' + event.clientY + " > " + modalCt.offsetTop + 343);

		console.log('clientX ' + event.clientX + " < " + modalCt.offsetLeft);
		console.log('clientX ' + event.clientX + " > " + modalCt.offsetLeft + 600);*/
	}		
}
/* --------------- End Show Hide Modal Footer ------------ */