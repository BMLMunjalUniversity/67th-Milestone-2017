from django.shortcuts import render
from django.http import HttpResponse
from website.models import Campus_Ambassdor
from website.forms import Campus_Ambassdor_Form
# Create your views here.
def index(request):
    context_dict = {}
    return render(request,'website/index.html',context_dict)


def campusambassdor(request):
    form = Campus_Ambassdor_Form()
    if request.method == 'POST':
        form = Campus_Ambassdor_Form(request.POST)
        if form.is_valid():
            page = form.save(commit=False)
            page.save()
        else:
            print(form.errors)
    context_dict = {'form': form}
    return render(request, 'website/Campus_Ambassdor_htmlform.html', context_dict)


def success(request):
    context_dict={}
    return render(request, 'website/Success.html', context_dict)