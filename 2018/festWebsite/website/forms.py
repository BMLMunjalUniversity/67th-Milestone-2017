from django import forms
from website.models import Campus_Ambassdor


class Campus_Ambassdor_Form(forms.ModelForm):
    email = forms.EmailField(max_length=100, required=True, help_text="E-Mail Address")
    phone = forms.IntegerField(required=True, help_text="WhatsApp Number")
    college_name = forms.CharField(max_length=100, required=True, help_text="Name of College")
    college_address = forms.CharField(max_length=300, required=True, help_text="Address of College")
    ca_code = forms.CharField(max_length=50, required=True, help_text="Any CA Code?")
    reason_ca = forms.CharField(widget=forms.Textarea(),max_length=500, required=True, help_text="Why do you want to be Campus Ambassador?")
    name = forms.CharField(max_length=100, help_text="Full Name", required=True)
    slug = forms.CharField(widget=forms.HiddenInput, required=False)

    class Meta:
        model = Campus_Ambassdor
        fields = ('name', 'email', 'phone', 'college_name', 'college_address', 'ca_code', 'reason_ca')
