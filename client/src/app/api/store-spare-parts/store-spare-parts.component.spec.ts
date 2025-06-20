import { ComponentFixture, TestBed } from '@angular/core/testing';

import { StoreSparePartsComponent } from './store-spare-parts.component';

describe('StoreSparePartsComponent', () => {
  let component: StoreSparePartsComponent;
  let fixture: ComponentFixture<StoreSparePartsComponent>;

  beforeEach(() => {
    TestBed.configureTestingModule({
      declarations: [StoreSparePartsComponent]
    });
    fixture = TestBed.createComponent(StoreSparePartsComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
