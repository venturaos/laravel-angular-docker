import { Component, OnInit } from '@angular/core';
import { FormBuilder, FormGroup, Validators } from '@angular/forms';
import { Location } from '@angular/common';
import { ActivatedRoute, Router } from '@angular/router';

import { Developer } from './../class/Developer';

@Component({
  selector: 'app-register',
  templateUrl: './register.component.html',
  styleUrls: ['./register.component.scss']
})
export class RegisterComponent implements OnInit {
  registerForm: FormGroup;

  constructor(
    private formBuilder: FormBuilder, 
    private location: Location, 
    private route: ActivatedRoute,
    private router: Router
  ) { }

  ngOnInit(): void {
    const developerId = this.route.snapshot.paramMap.get('id');
    let developerData = new Developer();
    
    if(developerId) {
      //pega os dados no back  
      developerData = new Developer(
        1,
        'name',
        'female',
        28,
        'sei não :(',
        { day: 14, month: 10, year: 2021 },
      )
    }

    this.createForm(developerData);
  }

  createForm(developer: Developer) {
    this.registerForm = this.formBuilder.group({
      id: [developer.id],
      name: [developer.name, Validators.required],
      gender: [developer.gender, Validators.required],
      age: [developer.age, Validators.required],
      hobby: [developer.hobby, Validators.required],
      date_birth: [developer.date_birth, Validators.required],
    })
  }

  onSubmit() {
    console.log(this.registerForm.value);
    if(this.registerForm.valid) {
      alert('enviando os dados');
      // TODO: Enviar dados para o back
      this.router.navigateByUrl('/');
    } else {
      Object.keys(this.registerForm.controls).forEach(field => {
        const control = this.registerForm.get(field)?.markAsDirty();
      })
    }
  }

  clearForm() {
    this.registerForm.reset(new Developer());
  }

  previousPage() {
    this.location.back();
  }

  isInvalid(controlName: string) {
    const control = this.registerForm.controls[controlName];
    return control.invalid && control.dirty;
  }

}
