import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';

const routes: Routes = [
  { 
    path: 'developers',
    loadChildren: () => import('./developers/developers.module').then(m => m.DevelopersModule)
  },
  { 
    path: '',
    pathMatch: 'full',
    redirectTo: '/developers',
  },
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
