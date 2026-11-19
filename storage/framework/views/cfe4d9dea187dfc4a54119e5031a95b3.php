

<?php $__env->startSection('content'); ?>
<div class="bg-[#0f172a] text-white min-h-screen py-10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Encabezado -->
        <div class="flex flex-col md:flex-row md:items-center justify-between mb-8 pb-4 border-b border-slate-800 gap-4">
            <div>
                <h1 class="text-3xl font-extrabold text-amber-400 tracking-wide">Noticias y Afiches Oficiales</h1>
                <p class="text-slate-400 text-sm mt-1">Etapa Macrorregional de Básquetbol 2026</p>
            </div>
            <div>
                <span class="bg-red-600 text-white font-semibold text-xs px-3 py-1.5 rounded-full uppercase tracking-wider">
                    Guerreros del Ampay - F.D.P.B.
                </span>
            </div>
        </div>

        <!-- Rejilla de Noticias -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <?php $__empty_1 = true; $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $noticia): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <div class="bg-slate-900 border border-slate-800 rounded-xl overflow-hidden shadow-lg flex flex-col hover:border-slate-700 transition duration-300">
                    
                    <!-- Imagen / Afiche -->
                    <?php if($noticia->imagen): ?>
                        <img src="<?php echo e(asset('storage/' . $noticia->imagen)); ?>" 
                             alt="<?php echo e($noticia->titulo); ?>" 
                             class="w-full h-52 object-cover">
                    <?php else: ?>
                        <div class="w-full h-52 bg-slate-800 flex items-center justify-center text-slate-500 font-medium border-b border-slate-800">
                            Sin Afiche Oficial
                        </div>
                    <?php endif; ?>

                    <!-- Contenido de la Tarjeta -->
                    <div class="p-5 flex flex-col flex-grow">
                        <small class="text-amber-400 font-medium text-xs mb-2">
                            <?php echo e($noticia->created_at ? $noticia->created_at->format('d/m/Y') : date('d/m/Y')); ?>

                        </small>
                        
                        <h2 class="text-xl font-bold text-white mb-2 leading-snug hover:text-amber-400 transition">
                            <?php echo e($noticia->titulo); ?>

                        </h2>
                        
                        <p class="text-slate-400 text-sm flex-grow line-clamp-3 mb-4">
                            <?php echo e(Str::limit($noticia->resumen ?? $noticia->contenido, 120)); ?>

                        </p>
                    </div>

                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <div class="col-span-full bg-slate-900 border border-slate-800 rounded-xl p-8 text-center text-slate-400">
                    <p class="text-lg">No hay noticias o afiches publicados por el momento.</p>
                </div>
            <?php endif; ?>
        </div>

    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.fiba', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\USUARIO\Documents\Ing_Software2\liga-basquetbol\resources\views/public/news/index.blade.php ENDPATH**/ ?>