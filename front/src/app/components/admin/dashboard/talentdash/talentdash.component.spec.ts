import { ComponentFixture, TestBed } from '@angular/core/testing';

import { TalentdashComponent } from './talentdash.component';

describe('TalentdashComponent', () => {
  let component: TalentdashComponent;
  let fixture: ComponentFixture<TalentdashComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ TalentdashComponent ]
    })
    .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(TalentdashComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
