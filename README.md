# Classnames

This plugin provides a developer tool to generate complex CSS classnames in
Twig templates in a way that makes them more readable.

It's a port of https://github.com/JedWatson/classnames but for PHP.

If you want a pure PHP version without plugin, please try: https://github.com/newridetech/php-classnames

Instead of:

```html
<nav class="link {{ item.isActive ? 'link--active' : '' }} {{ item.extra == 'primary' ? 'link--primary' : '' }}">
    ....
</nav>
```

Use:

```html
<nav
    class="{{
        classnames('link', {
            'link--active': item.isActive,
            'link--primary': item.extra == 'primary'
        })
    }}"
>
    ....
</nav>
```

And that's all. :) I hope it helps.
