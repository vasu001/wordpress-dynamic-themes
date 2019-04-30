$(function () {
	$('html,body').css('background-image', 'none')

	const navIcon = $('#nav-pull-icon')

	navIcon.click(() => {
		const displayFrontHeaderSmall = $('#blog-header-nav-small')
		displayFrontHeaderSmall.toggle(300)
	})
})