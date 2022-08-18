SELECT f.title, a.first_name, a.last_name
FROM film f
JOIN film_actor fa
USING(film_id)
JOIN actor a
USING (actor_id);

