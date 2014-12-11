{% extends "layuot.php" %}
{% block title %}
Новости
{% endblock %}

{% block content %}
	{% if data %}
		{% for newsone in data %}
                            
                <div class="feature"><h3><a href='{{url.generate('newsone',{id:newsone.id})}}'>{{ newsone.title }}</a></h3></div><dr>

                            
		{% endfor %}
	{% endif %}
        <a href='{{url.generate('news',{page:data.3})}}'><<< Назад </a><a href='{{url.generate('news',{page:data.4})}}'> Вперед>>></a>
{% endblock %}

