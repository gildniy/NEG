<?php if ($showLabel && $showField): ?>
<?php if ($options['wrapper'] !== false): ?>
<div <?= $options['wrapperAttrs'] ?> >
    <?php endif; ?>
    <?php endif; ?>

    <?php if ($showLabel && $options['label'] !== false): ?>
        <?= Form::label($name, $options['label'], $options['label_attr']) ?>
    <?php endif; ?>

    <?php if ($showField): ?>
        <?php $emptyVal = $options['empty_value'] ? ['' => $options['empty_value']] : null; ?>
        <?= Form::select($name, (array)$emptyVal + $options['choices'], $options['selected'], $options['attr']) ?>
    <?php endif; ?>


    <?php if ($showError && isset($errors)): ?>
        <?= $errors->first(array_get($options, 'real_name', $name), '<div ' . $options['errorAttrs'] . '>:message</div>') ?>
    <?php endif; ?>

    <?php if ($showLabel && $showField): ?>
    <?php if ($options['wrapper'] !== false): ?>
</div>
<?php endif; ?>
<?php endif; ?>
