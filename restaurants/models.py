from django.db import models

# Create your models here.

class Restaurant(models.Model):
    name = models.CharField(max_length=100)
    description = models.TextField()
    image = models.ImageField(upload_to='restaurant_images/', blank=True, null=True)
    category = models.CharField(max_length=50)

    def __str__(self):
        return self.name

class Review(models.Model):
    restaurant = models.ForeignKey(Restaurant, on_delete=models.CASCADE, related_name='reviews')
    author = models.CharField(max_length=100)
    text = models.TextField()
    created_at = models.DateTimeField(auto_now_add=True)

    def __str__(self):
        return f"Review by {self.author} on {self.restaurant.name}"
