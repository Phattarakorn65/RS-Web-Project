from django.shortcuts import render, get_object_or_404, redirect
from django.contrib import messages
from .models import Restaurant, Review
from django import forms

# Create your views here.

class ReviewForm(forms.ModelForm):
    class Meta:
        model = Review
        fields = ['author', 'text']
        widgets = {
            'author': forms.TextInput(attrs={'class': 'form-control', 'placeholder': 'Your Name'}),
            'text': forms.Textarea(attrs={'class': 'form-control', 'placeholder': 'Your Review', 'rows': 4}),
        }

def restaurant_list(request):
    restaurants = Restaurant.objects.all()
    return render(request, 'restaurants/restaurant_list.html', {'restaurants': restaurants})

def restaurant_detail(request, pk):
    restaurant = get_object_or_404(Restaurant, pk=pk)
    
    # Handle form submission
    if request.method == 'POST':
        form = ReviewForm(request.POST)
        if form.is_valid():
            review = form.save(commit=False)
            review.restaurant = restaurant
            review.save()
            messages.success(request, 'Review submitted successfully!')
            return redirect('restaurant_detail', pk=pk)
    else:
        form = ReviewForm()
    
    return render(request, 'restaurants/restaurant_detail.html', {
        'restaurant': restaurant,
        'form': form
    })
