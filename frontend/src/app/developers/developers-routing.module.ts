import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { DevelopersListComponent } from './developers-list/developers-list.component';
import { RegisterComponent } from './register/register.component';

const routes: Routes = [
  { 
    path: 'new',
    component: RegisterComponent
  },
  { 
    path: 'edit/:id',
    component: RegisterComponent
  },
  { 
    path: '', 
    pathMatch: 'full',
    component: DevelopersListComponent 
  },
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule]
})
export class DevelopersRoutingModule { }
