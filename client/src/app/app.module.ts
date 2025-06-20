import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { FormsModule } from '@angular/forms';
import { HttpClientModule } from '@angular/common/http';
import { ViewSparePartsComponent } from './api/view-spare-parts/view-spare-parts.component';
import { StoreSparePartsComponent } from './api/store-spare-parts/store-spare-parts.component';

@NgModule({
  declarations: [
    AppComponent,
    ViewSparePartsComponent,
    StoreSparePartsComponent
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    FormsModule,
    HttpClientModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
