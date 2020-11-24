// button to bring up a popup
function open_rewards_list(){
	$('.rewards_list').show();
	$('.rewards_home').hide();
}
function open_rewards_confirmation(ag) {
    var gambar = $(ag).attr("src");
    $('.rewards_confirmation').show();
    $('#got').attr('src',gambar);
}
function open_account_login(){
	$('.account_login').show();
	$('.rewards_confirmation').hide();
}
function open_facebook(){
	$('.facebook').show();
	$('.account_login').hide();
}
function open_twitter(){
	$('.twitter').show();
	$('.account_login').hide();
}

// button to close the popup
function close_rewards_confirmation(){
	$(".rewards_confirmation").hide()
}
function close_account_login(){
	$('.account_login').hide();
	$('.rewards_confirmation').show();
}
function close_facebook(){
	$('.facebook').hide();
	$('.account_login').show();
}
function close_twitter(){
	$('.twitter').hide();
	$('.account_login').show();
}