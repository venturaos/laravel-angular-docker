import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { ReactiveFormsModule } from '@angular/forms';
import { NgbModule } from '@ng-bootstrap/ng-bootstrap';

import { DevelopersRoutingModule } from './developers-routing.module';
import { DevelopersListComponent } from './developers-list/developers-list.component';
import { RegisterComponent } from './register/register.component';


@NgModule({
  declarations: [
    DevelopersListComponent,
    RegisterComponent
  ],
  imports: [
    CommonModule,
    DevelopersRoutingModule,
    ReactiveFormsModule,
    NgbModule,
  ]
})
export class DevelopersModule { }
