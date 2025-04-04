<!DOCTYPE html>
<html lang="<?php echo e($locale['code']); ?>" dir="<?php echo e($locale['direction']); ?>">
	<head>
        <?php if($generalSettings->gaId): ?>
            <script async defer src="https://www.googletagmanager.com/gtag/js?id=<?php echo e($generalSettings->gaId); ?>" type="text/javascript"></script>
            <script type="text/javascript">
                window.dataLayer = window.dataLayer || [];
                function gtag(){dataLayer.push(arguments);}
                gtag('js', new Date());

                gtag('config', '<?php echo e($generalSettings->gaId); ?>');
            </script>
        <?php endif; ?>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no" />
		<title><?php echo e($title); ?> — <?php echo e($generalSettings->websiteTitle); ?></title>
        <?php echo $__env->make('includes.seo-content', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <link rel="icon" href="<?php echo e(storage_url( $generalSettings->favicon )); ?>">
		<link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
		<link rel="stylesheet" href="<?php echo e(asset('css/all.min.css')); ?>">
		<link rel="stylesheet" href="<?php echo e(asset('css/additional.css')); ?>">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

        <?php echo $__env->make('includes.header-content', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <?php if(isset($wire)): ?>
            <?php echo \Livewire\Livewire::styles(); ?>

        <?php endif; ?>

        <?php if(isset($recaptcha) && $recaptcha): ?>
            <script src="https://www.google.com/recaptcha/api.js" async defer></script>
        <?php endif; ?>
    </head>
<body class="<?php echo e($locale['direction']); ?> <?php echo e($theme); ?>">

    <?php if($generalSettings->bodyTags): ?>
        <?php echo $generalSettings->bodyTags; ?>

    <?php endif; ?>

	<div class="container">
		<div class="main-section">
			<header class="mainPadding">
				<nav class="p-0 navbar navbar-expand-lg navbar-dark">
					<a class="navbar-brand <?php echo e($theme == 'dark' ? 'dark' : ''); ?>" href="<?php echo e(url('/')); ?>"><img alt="top-logo" src="<?php echo e(storage_url( $theme == 'dark' ? $generalSettings->footerLogo : $generalSettings->logo )); ?>" class="img-responsivee" width="auto" height="auto"></a>
					<div class="d-flex ms-auto align-items-center">
                        <div class="collapse navbar-collapse header-navbar" x-data x-on:toggle.window="$el.classList.toggle('show')" id="navbarNavDropdown">
                            <ul>
                                <li>
                                    <a href="<?php echo e(url('/')); ?>"><?php echo e(trans('webtools/pages.home-link')); ?></a>
                                </li>

                                <?php if($sass->status && (!auth()->check() || !auth()->user()->premium())): ?>
                                    <li>
                                        <a href="<?php echo e(route('pricing')); ?>">Pricing</a>
                                    </li>
                                <?php endif; ?>

                                <?php $__currentLoopData = $navigationPages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($page->location == 'header' || $page->location == 'both'): ?>
                                        <li>
                                            <a href="<?php echo e(route('page', $page->slug)); ?>"><?php echo e($page->title); ?></a>
                                        </li>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                <?php $__currentLoopData = $generalSettings->links; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $link): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($link['location'] == 'header' || $link['location'] == 'both'): ?>
                                        <li>
                                            <a <?php echo e($link['newTab'] ? 'target="_blank"' : ''); ?> href="<?php echo e($link['url']); ?>"><?php echo e($link['label']); ?></a>
                                        </li>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                <?php if($generalSettings->blogSection): ?>
                                    <li>
                                        <a href="<?php echo e(route('blog')); ?>"><?php echo e(trans('webtools/pages.blog-link')); ?></a>
                                    </li>
                                <?php endif; ?>

                                <?php if($generalSettings->contactPage): ?>
                                    <li>
                                        <a href="<?php echo e(route('contact')); ?>"><?php echo e(trans('webtools/pages.contact-link')); ?></a>
                                    </li>
                                <?php endif; ?>
                            </ul>
                        </div>

                        <?php if($generalSettings->darkTheme): ?>
                            <div x-data="{ show: false }" @click.outside="show = false" class="btn-group header-language-btn-group theme-change-color">
                                <a href="<?php echo e(route('set-theme', $theme == 'light' ? 'dark' : 'light')); ?>" class="text-black header-language-btn">
                                    <div class="text"><i class="fas <?php echo e($theme == 'light' ? 'fa-moon' : 'fa-sun'); ?>"></i></div>
                                </a>
                            </div>
                        <?php endif; ?>

                        <?php if(count($languageSettings->languages) && count($languageSettings->languages) > 1): ?>
                            <div x-data="{ show: false }" @click.outside="show = false" class="btn-group header-language-btn-group">
                                <button type="button" :class="show && 'show'" @click="show = !show" class="header-language-btn dropdown-toggle">
                                    <div class="icon">
                                        <img width="20" height="18" src="https://countryflagsapi.netlify.app/flag/<?php echo e(get_locale()['flag']); ?>.png" alt="">
                                    </div>
                                    <div class="text <?php echo e($locale['direction'] == 'rtl' ? 'mx-2' : ''); ?>"><?php echo e(strtoupper(trim(get_locale()['code']))); ?></div>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end header-language-dd" :class="show && 'show'" data-bs-popper>
                                    <?php $__currentLoopData = $languageSettings->languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <a href="javascript:void()" x-on:click="window.location.replace('<?php echo e(route('set-language', $language['code'])); ?>')" class="<?php echo e(get_locale()['code'] == strtolower(trim($language['code'])) ? 'active' : ''); ?>">
                                            <div class="icon">
                                                <img width="20" height="18" src="https://countryflagsapi.netlify.app/flag/<?php echo e($language['flag']); ?>.png" alt="">
                                            </div>
                                            <div class="text"><?php echo e(strtoupper(trim($language['code']))); ?></div>
                                        </a>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </div>
                        <?php endif; ?>

                        <?php if($sass->status): ?>
                            <div x-data="{ show: false }" x-on:click.outside="show = false" class="login-btn-main">
                                <a x-on:click="show = ! show" href="<?php echo e(auth()->check() ? 'javascript:void(0)' : route('login')); ?>" class="login-btn" data-bs-toggle="dropdown">
                                    <div class="login-user-icon <?php echo e(auth()->check() ? 'logedin' : ''); ?> "><svg width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M3.9597 1.83419C5.2233 0.52676 6.62153 0 8.2215 0C9.83146 0 11.3482 0.653759 12.4862 1.83717C13.6224 3.0187 14.2488 4.59329 14.2488 6.26212C14.2488 7.93096 13.6224 9.50555 12.4862 10.6871L12.4848 10.6885C12.4235 10.7518 12.3612 10.8137 12.2978 10.874C12.5936 11.0479 12.8806 11.2418 13.1572 11.4554C13.688 11.8655 13.8033 12.6453 13.4073 13.1995L13.4069 13.2001C13.0092 13.7554 12.2536 13.8739 11.7152 13.4607L11.7141 13.4599C10.7 12.6783 9.49629 12.2664 8.23017 12.2664C6.78425 12.2664 5.39618 12.8181 4.31918 13.8227C3.25059 14.8201 2.57178 16.1816 2.40748 17.657C2.33727 18.2921 1.81704 18.7638 1.20867 18.7638C1.16076 18.7638 1.11682 18.7601 1.09784 18.7586C1.096 18.7584 1.09439 18.7583 1.09304 18.7582L1.08011 18.7571L1.06723 18.7556C0.402205 18.6744 -0.068535 18.0532 0.00819045 17.3704C0.237974 15.3024 1.00149 13.5473 2.70459 11.9627C3.13229 11.5648 3.72582 11.1808 4.19061 10.9049C4.10516 10.8292 4.02466 10.754 3.95856 10.6853C2.82237 9.50374 2.19589 7.92916 2.19589 6.26032C2.19589 4.60489 2.68578 3.15229 3.9597 1.83419ZM8.22323 2.49955C7.25777 2.49955 6.35384 2.88828 5.67129 3.59792C4.98791 4.31022 4.61226 5.25153 4.61226 6.26032C4.61226 7.26963 4.98826 8.21243 5.67103 8.92245C6.33022 9.60795 7.13081 9.97684 8.05846 10.0181C9.06853 10.0623 10.0592 9.66271 10.774 8.92214C11.4571 8.21167 11.8342 7.26879 11.8342 6.26032C11.8342 5.25039 11.4595 4.30807 10.7759 3.5987C10.0912 2.88821 9.18682 2.49955 8.22323 2.49955ZM13.5634 13.5512C13.5634 12.8659 14.0992 12.3005 14.7716 12.3005C15.4439 12.3005 15.9797 12.8659 15.9797 13.5512V14.3996H16.7901C17.4631 14.3996 17.9963 14.9649 18 15.6466L18 15.6503C18 16.3355 17.4642 16.9009 16.7918 16.9009H15.9815V17.7493C15.9815 18.4346 15.4457 19 14.7733 19C14.1009 19 13.5651 18.4346 13.5651 17.7493V16.9009H12.753C12.0806 16.9009 11.5448 16.3355 11.5448 15.6503C11.5448 14.965 12.0806 14.3996 12.753 14.3996H13.5634V13.5512Z" fill="#4C3FF2"/></svg></div>
                                </a>

                                <?php if(auth()->check()): ?>
                                    <ul x-cloak x-bind:class="`${(show ? 'show ' : '')} dropdown-menu dropdown-menu-end`">
                                        <li><a href="<?php echo e(route('manage')); ?>">Profile</a></li>
                                        <li><a href="<?php echo e(route('logout')); ?>">Sign Out</a></li>
                                    </ul>
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>

                        <div x-data x-on:click="$dispatch('toggle')" id="navbar-toggler" class="nav-btn" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
				</nav>
			</header>

            <?php echo $__env->yieldContent('content'); ?>

            <div class="row">
                <?php if($generalSettings->contactPage): ?>
                    <div class="col-lg-6">
                        <div class="home-helping-sec">
                            <?php echo $generalSettings->contactSectionContent; ?>


                            <a href="<?php echo e(route('contact')); ?>" class="btn custom--btn button__lg btn__light">Let's Talk</a>
                        </div>
                    </div>
                <?php endif; ?>

				<div class="<?php echo e($generalSettings->contactPage ? 'col-lg-6' : 'col-lg-12'); ?>">
					<footer>
						<div class="footer-logo"><a href="<?php echo e(url('/')); ?>"><img alt="footer-logo" src="<?php echo e(storage_url( $generalSettings->footerLogo )); ?>" alt="" width="auto" height="auto"></a></div>
						<div class="footer-nav">
                            <?php $__currentLoopData = $navigationPages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($page->location == 'footer' || $page->location == 'both'): ?>
                                    <a href="<?php echo e(route('page', $page->slug)); ?>"><?php echo e($page->title); ?></a>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            <?php $__currentLoopData = $generalSettings->links; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $link): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($link['location'] == 'footer' || $link['location'] == 'both'): ?>
                                    <a <?php echo e($link['newTab'] ? 'target="_blank"' : ''); ?> href="<?php echo e($link['url']); ?>"><?php echo e($link['label']); ?></a>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            <?php if($generalSettings->blogSection): ?>
                                <a href="<?php echo e(route('blog')); ?>"><?php echo e(trans('webtools/pages.blog-link')); ?></a>
                            <?php endif; ?>
						</div>
						<div class="footer-copyright"><?php echo $generalSettings->footerAttribution; ?></div>
					</footer>
				</div>
			</div>
               <style>
  .Social-container {
    background-color: rgb(76, 63, 242);
    border-radius: 22px;
    display: grid;
    grid-template-columns: 2fr 1fr;
    gap: 1.5rem;
    padding: 1rem;
  }

  .Social-row {
    display: flex;
    align-items: center;
    justify-content: space-around;
    flex-wrap: wrap;
    row-gap: 0.5rem;
  }

  .Social-row-second {
    display: flex;
    align-items: center;
    flex-wrap: wrap;
    justify-content: space-between;
    row-gap: 0.5rem;
  }

  .Social-link {
    position: relative;
    width: 115px;
    height: 60px;
    display: flex;
    justify-content: center;
    align-items: center;
    cursor: pointer;
    overflow: hidden;
    border-radius: 8px;
    transition: background-color 0.3s ease, border 0.3s ease; /* Adjusted transition */
  }

  .Social-link img {
    width: 100%;
    height: 100%;
    object-fit: contain;
    transition: opacity 0.3s ease;
  }

  .Social-link .Social-text {
    position: absolute;
    bottom: -100%; /* Start off-screen */
    left: 50%;
    transform: translateX(-50%);

    font-weight: bold;
    opacity: 1;
    transition: bottom 0.3s ease; /* Animate bottom property */
    white-space: nowrap;
  }

  .Social-link:hover img {
    opacity: 0;
  }

  .Social-link:hover .Social-text {
    bottom: 50%; /* Slide up to center */
    transform: translate(-50%, 50%);
  }

  .Social-link:hover {
    background-color: white;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  }

  .Social-link[data-site="facebook"]:hover {
    border: 1px solid #1877f2;
    color: #1877f2;
  }

  .Social-link[data-site="x"]:hover {
    border: 1px solid #000;
    color: #000;
  }

  .Social-link[data-site="youtube"]:hover {
    border: 1px solid #ff0000;
    color: #ff0000;
  }

  .Social-link[data-site="linkedin"]:hover {
    border: 1px solid #0a66c2;
    color: #0a66c2;
  }

  .Social-link[data-site="quora"]:hover {
    border: 1px solid #b92b27;
    border: #b92b27;
  }

  .Social-link[data-site="crunchbase"]:hover {
    border: 1px solid #00b9e0;
    border: #00b9e0;
  }

  .Social-link[data-site="f6s"]:hover {
    border: 1px solid #34a853;
    color: #34a853;
  }

  .Social-learn {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
  }

  .Social-learn h5 {
    color: white;
    text-align: center;
    margin-bottom: 1rem;
  }

  @media (max-width: 768px) {
    .Social-container {
      grid-template-columns: 1fr;
    }
  }
</style>

<div class="Social-container">
  <div class="Social-row">
    <a href="https://www.facebook.com/Meritcodetech/" target="_blank" class="Social-link" data-site="facebook">
      <img width="48" height="48" src="https://img.icons8.com/color/48/facebook-new.png" alt="facebook-new" />
      <div class="Social-text">Facebook</div>
    </a>
    <a href="https://x.com/Meritcode_tech" target="_blank" class="Social-link" data-site="x">
      <img width="50" height="50" src="https://img.icons8.com/ios/50/twitterx--v2.png" alt="twitterx" />
      <div class="Social-text">X</div>
    </a>
    <a href="https://www.youtube.com/@MeritCodeTechPVTLTD" target="_blank" class="Social-link" data-site="youtube">
      <img width="48" height="48" src="https://img.icons8.com/color/48/youtube-play.png" alt="youtube" />
      <div class="Social-text">YouTube</div>
    </a>
    <a href="https://www.linkedin.com/company/merit-code-tech/" target="_blank" class="Social-link" data-site="linkedin">
      <img width="50" height="50" src="https://img.icons8.com/fluency/50/linkedin.png" alt="linkedin" />
      <div class="Social-text">LinkedIn</div>
    </a>
    <a href="https://www.quora.com/profile/Merit-Code-Tech-PVT-LTD" target="_blank" class="Social-link" data-site="quora">
      <img width="50" height="50" src="https://img.icons8.com/ios/50/quora.png" alt="quora" />
      <div class="Social-text">Quora</div>
    </a>
  </div>
  <div class="Social-learn">
    <h5>Learn more about us</h5>
    <div class="Social-row-second">
      <a href="https://www.crunchbase.com/organization/merit-code-tech" target="_blank" class="Social-link" data-site="crunchbase">
        <img width="50" height="50" src="<?php echo e(asset('images/cb.svg')); ?>" alt="CrunchBase" />
        <div class="Social-text">CrunchBase</div>
      </a>
      <a href="https://www.f6s.com/merit-code-tech" target="_blank" class="Social-link" data-site="f6s">
        <img width="50" height="50" src="<?php echo e(asset('images/f6s.svg')); ?>" alt="F6S" />
        <div class="Social-text">F6S</div>
      </a>
    </div>
  </div>
</div>
            </div>
		</div>
	</div>

    <?php if($cookieConsent == 'no-consent'): ?>
        <div x-data class="cookie-alert alert alert-dark text-center mb-0" x-ref="parent">
            This website uses Cookies to ensure optimal user experience. <button x-on:click="fetch('<?php echo e(url("/cookie-consent")); ?>'); $refs.parent.remove();" class="btn btn-primary">OK</button>
        </div>
    <?php endif; ?>

    <?php echo $__env->yieldPushContent('alpine-components'); ?>
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>

    <?php if(isset($wire)): ?>
        <?php echo \Livewire\Livewire::scripts(); ?>

    <?php endif; ?>

    <?php echo $__env->make('includes.footer-content', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->yieldPushContent('scripts'); ?>
</body>
</html>
<?php /**PATH /home/awsstart/domains/meritcodetechnology.com/public_html/resources/views/layouts/main.blade.php ENDPATH**/ ?>