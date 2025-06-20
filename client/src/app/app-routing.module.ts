import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { StoreSparePartsComponent } from './api/store-spare-parts/store-spare-parts.component';
import { ViewSparePartsComponent } from './api/view-spare-parts/view-spare-parts.component';

const routes: Routes = [
  {
    path: '/store-k3-spare-parts',
    component: StoreSparePartsComponent,
    title: 'Add K3 Spare Parts'
  },
  {
    path: '/view-k3-spare-parts',
    component: ViewSparePartsComponent,
    title: 'Add K3 Spare Parts'
  },
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
