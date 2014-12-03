{% extends "template_view.php" %}
{% block title %}
{{ data.0.title }}
{% endblock %}
{% block content %}
    {% for myrow in data %}

    <div class="onenews">
        <h1><p>{{ myrow.title }}</p></h1><p>{{ myrow.text }} </p><p> Автор статьи: {{ myrow.user }}	 {{ myrow.date }}</br>
    <a href="{{url.generate('news')}}"><< Назад</a>
    </div>

    {% endfor %}
{% endblock %}

