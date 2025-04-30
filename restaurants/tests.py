from django.test import TestCase
from .models import Restaurant

# Create your tests here.

class RestaurantModelTest(TestCase):
    def test_create_restaurant(self):
        restaurant = Restaurant.objects.create(
            name='Testaurant',
            description='A test restaurant',
            category='Test',
        )
        self.assertEqual(str(restaurant), 'Testaurant')
