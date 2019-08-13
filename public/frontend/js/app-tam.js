
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
	if(window.innerWidth <= 425){			
		if(footerLink[0].classList.contains('showServiceLinkMobile') == false){
			footerLink[0].classList.add('showServiceLinkMobile');
			footerLink[0].classList.add('transitionCollapse');
			angleDown[0].classList.add('rotateAngleDown');
		}
		else{				
			footerLink[0].classList.remove('showServiceLinkMobile');
			footerLink[0].classList.remove('transitionCollapse');
			angleDown[0].classList.remove('rotateAngleDown');
		}
	}	
		
}	

function collapseShowItemBuy(){
	if(window.innerWidth <= 425){
		if(footerLink[1].classList.contains('showServiceLinkMobile') == false){
			footerLink[1].classList.add('showServiceLinkMobile')
			footerLink[1].classList.add('transitionCollapse');
			angleDown[1].classList.add('rotateAngleDown');			
		}
		else{
			footerLink[1].classList.remove('showServiceLinkMobile');
			footerLink[1].classList.remove('transitionCollapse');
			angleDown[1].classList.remove('rotateAngleDown');
		}
	}	
}

function collapseShowItemSell(){
	if(window.innerWidth <= 425){
		if(footerLink[2].classList.contains('showServiceLinkMobile') == false){
			footerLink[2].classList.add('showServiceLinkMobile')
			footerLink[2].classList.add('transitionCollapse');
			angleDown[2].classList.add('rotateAngleDown');			
		}
		else{
			footerLink[2].classList.remove('showServiceLinkMobile');
			footerLink[2].classList.remove('transitionCollapse');
			angleDown[2].classList.remove('rotateAngleDown');
		}
	}
}				

function collapseShowItemHelp(){
	if(window.innerWidth <= 425){	
		if(footerLink[3].classList.contains('showServiceLinkMobile') == false){
			footerLink[3].classList.add('showServiceLinkMobile')
			footerLink[3].classList.add('transitionCollapse');
			angleDown[3].classList.add('rotateAngleDown');			
		}
		else{
			footerLink[3].classList.remove('showServiceLinkMobile');
			footerLink[3].classList.remove('transitionCollapse');
			angleDown[3].classList.remove('rotateAngleDown');
		}
	}
}

function collapseShowItemVestiaire(){
	if(window.innerWidth <= 425){
		if(footerLink[4].classList.contains('showServiceLinkMobile') == false){
			footerLink[4].classList.add('showServiceLinkMobile')
			footerLink[4].classList.add('transitionCollapse');
			angleDown[4].classList.add('rotateAngleDown');			
		}
		else{
			footerLink[4].classList.remove('showServiceLinkMobile');
			footerLink[4].classList.remove('transitionCollapse');
			angleDown[4].classList.remove('rotateAngleDown');
		}
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



/* --------------- Show Hide Modal Footer ------------ */
var openModal = document.getElementById('open-footer-modal');
var modal = document.getElementById('footer-modal-choose'); // hop thoai modal
var closeModal = document.getElementById('close-footer-modal');

openModal.addEventListener('click', openFooterModalChoose); // click open modal
function openFooterModalChoose(){
	if(modal.style.display === "block"){
		modal.classList.remove('showModal');
	}
	else{
		modal.classList.add('showModal');
	}
}

closeModal.addEventListener('click', closeFooterModalChoose) // click close modal
function closeFooterModalChoose(){
	modal.classList.remove('showModal');
}

modal.addEventListener('click', ClickOut);		
function ClickOut(e){
	if(!e.target.closest('.modal-body')){
		modal.classList.remove('showModal');
		console.log('true');
	}
	else{
		modal.classList.add('showModal');
		console.log('false');
	}
}

/* --------------- End Show Hide Modal Footer ------------ */



