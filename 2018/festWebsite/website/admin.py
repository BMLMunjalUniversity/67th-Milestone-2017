from django.contrib import admin
from website.models import Campus_Ambassdor

# Register your models here.

class CampusAmbassdorAdmin(admin.ModelAdmin):
    prepopulated_fields = {'slug': ('email',)}
admin.site.register(Campus_Ambassdor,CampusAmbassdorAdmin)

