<?php $__env->startSection('content'); ?>


<div id="home" style="position: relative; color: white; padding-top: 64px; padding-bottom: 64px; border-radius: 24px; background: linear-gradient(135deg, #6366F1, #3B82F6, #10B981); overflow: hidden;">
    <div style="max-width: 1280px; margin: auto; padding-left: 16px; padding-right: 16px; display: flex; flex-direction: column-reverse; align-items: center; text-align: center;">
        <div style="width: 100%; max-width: 600px;">
            <h1 style="font-size: 2.5rem; font-weight: 800; margin-bottom: 20px; line-height: 1.2;">Transform Your Business with Next-Gen <span style="color: #facc15;">AI tools</span></h1>
            <p style="font-size: 1.25rem; margin-bottom: 32px; color: #e0e7ff;">Enhance productivity and scale your business with our intelligent AI tools that automate, optimize, and innovate.</p>
            <div style="display: flex; justify-content: center; gap: 16px;">
                <a href="#tools" style="background-color: white; color: #4f46e5; padding: 14px 28px; border-radius: 9999px; font-weight: 600; text-decoration: none; transition: 0.3s ease;" onmouseover="this.style.transform='scale(1.05)'" onmouseout="this.style.transform='scale(1)'">Start Today</a>
                <a href="#about" style="border: 2px solid white; color: white; padding: 14px 28px; border-radius: 9999px; text-decoration: none; transition: 0.3s ease;" onmouseover="this.style.backgroundColor='white'; this.style.color='#4f46e5';" onmouseout="this.style.backgroundColor='transparent'; this.style.color='white';">Try Now</a>
            </div>
        </div>
        
    </div>
</div>


<div id="about" style="padding-top: 64px; padding-bottom: 64px; ">
    <div style="max-width: 1280px; margin: auto; padding-left: 16px; padding-right: 16px; text-align: center;">
        <h2 style="font-size: 2rem; font-weight: 700; color: #1f2937; margin-bottom: 16px;">Scale Smarter with Merit Code Tech</h2>
        <p style="font-size: 1.25rem; color: #4b5563; max-width: 640px; margin: auto;">Our advanced AI tools are designed to automate processes, enhance decision-making, and streamline operations, driving innovation and growth across industries.</p>
    </div>
    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 32px; max-width: 1280px; margin: auto; padding-top: 32px;">
        <div style="background-color: white; padding: 24px; border-radius: 16px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); text-align: center;">
            <i class="fas fa-brain" style="font-size: 40px; color: #4f46e5; margin-bottom: 16px;"></i>
            <h3 style="font-size: 1.25rem; font-weight: 600; margin-bottom: 12px;">Smart Solutions</h3>
            <p style="color: #4b5563;">Intelligent tools that streamline processes and drive innovation.</p>
        </div>
        <div style="background-color: white; padding: 24px; border-radius: 16px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); text-align: center;">
            <i class="fas fa-bolt" style="font-size: 40px; color: #10b981; margin-bottom: 16px;"></i>
            <h3 style="font-size: 1.25rem; font-weight: 600; margin-bottom: 12px;">High-Performance</h3>
            <p style="color: #4b5563;">Speed and efficiency to accelerate your business operations</p>
        </div>
        <div style="background-color: white; padding: 24px; border-radius: 16px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); text-align: center;">
            <i class="fas fa-mobile-alt" style="font-size: 40px; color: #3b82f6; margin-bottom: 16px;"></i>
            <h3 style="font-size: 1.25rem; font-weight: 600; margin-bottom: 12px;">Access AI Anywhere, Anytime</h3>
            <p style="color: #4b5563;">Seamless mobile experience for continuous productivity.</p>
        </div>
    </div>
</div>
    


<div class="hero-section">
    <div class="hero-small-title"><?php echo e(trans('webtools/homepage.title')); ?></div>
    <h1>Smart AI Tools & Utilities that boost your daily efficiency</h1>
</div>
<div class="main-search-sec">
    <input x-data="window.bitflanToolSearchComponent()" type="text" placeholder="<?php echo e(trans('webtools/homepage.search-placeholder')); ?>">
</div>

<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.ads.top-banner','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('ads.top-banner'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

<div class="content-sec">

    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div data-category data-count="<?php echo e(count($category['tools'])); ?>" class="content-sec-inner">
            <div class="content-title-sec">
                <?php echo $__env->make($category['view'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
            <div class="content-cats-sec">
                <?php $__currentLoopData = $category['tools']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $tool): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($toolOptions['tool-' . $tool['name'] . '.' . 'enabled'][0]->payload != 'false'): ?>
                        <div class="content-cats-col" data-tool data-name="<?php echo e(str_replace('"', '', $toolOptions['tool-' . $tool['name'] . '.' . 'title'][0]->payload)); ?>" data-summary="<?php echo e(str_replace('"', '', $toolOptions['tool-' . $tool['name'] . '.' . 'summary'][0]->payload)); ?>">
                            <a href="<?php echo e(!can_use($key) ? route('pricing') : route('tool', $slugs->{$key})); ?>" class="content-cats-inner <?php echo e(!can_use($key) ? 'locked' : ''); ?>">
                                <?php echo $__env->make($tool['templates']['selector'], [
                                    'tool'    => $tool['name'],
                                    'title'   => get_tool_title($tool['name'], str_replace('"', '', $toolOptions['tool-' . $tool['name'] . '.' . 'title'][0]->payload)),
                                    'summary' => get_tool_summary($tool['name'], str_replace('"', '', $toolOptions['tool-' . $tool['name'] . '.' . 'summary'][0]->payload)),
                                ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            </a>
                        </div>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</div>

<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.ads.bottom-banner','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('ads.bottom-banner'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

<div id="cta" style="padding: 64px 16px; text-align: center; background-color: #4F46E5; color: white;">
    <h2 style="font-size: 2rem; font-weight: 700; margin-bottom: 16px;">Upgrade with AI</h2>
    <p style="font-size: 1.25rem; margin-bottom: 24px;">Streamline workflows and maximize productivity instantly with our Merit Code Tech Tools</p>
    <a href="#signup" style="background-color: white; color: #4F46E5; padding: 14px 28px; border-radius: 9999px; font-weight: 600; text-decoration: none; font-size: 1.1rem;">Get Started</a>
</div>

<div id="testimonial" style="padding: 64px 16px; background: linear-gradient(135deg, #F3F4F6, #E5E7EB); text-align: center;">
    <h2 style="font-size: 2rem; font-weight: 700; color: #1f2937; margin-bottom: 32px;">What Our Users Say</h2>
    <div style="display: flex; flex-direction: column; align-items: center; gap: 24px; max-width: 800px; margin: auto;">
        <div style="background-color: white; padding: 24px; border-radius: 16px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); text-align: center;">
            <p style="font-size: 1.1rem; color: #4b5563;">"MeritAI has completely transformed how we interact with customers. The AI-powered chatbot provides instant, accurate support, improving satisfaction and efficiency like never before."</p>
            <strong style="display: block; margin-top: 12px; color: #4F46E5;"> — Mariea Fedrick, Business Owner</strong>
        </div>
        <div style="background-color: white; padding: 24px; border-radius: 16px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); text-align: center;">
            <p style="font-size: 1.1rem; color: #4b5563;"> "With MeritAI, we've automated customer service and gained valuable insights. The AI-driven approach has helped us make smarter, faster decisions effortlessly."</p>
            <strong style="display: block; margin-top: 12px; color: #4F46E5;">— Ravindu Fernando, Entrepreneur</strong>
        </div>
    </div>
</div>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/awsstart/domains/meritcodetechnology.com/public_html/resources/views/homepage.blade.php ENDPATH**/ ?>