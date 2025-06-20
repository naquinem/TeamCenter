import { ComponentFixture, TestBed } from '@angular/core/testing';

import { ViewSparePartsComponent } from './view-spare-parts.component';

describe('ViewSparePartsComponent', () => {
  let component: ViewSparePartsComponent;
  let fixture: ComponentFixture<ViewSparePartsComponent>;

  beforeEach(() => {
    TestBed.configureTestingModule({
      declarations: [ViewSparePartsComponent]
    });
    fixture = TestBed.createComponent(ViewSparePartsComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
