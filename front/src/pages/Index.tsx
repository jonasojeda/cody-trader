import { useState } from "react";
import { Header } from "@/components/Header";
import { HeroSection } from "@/components/HeroSection";
import { MethodologySection } from "@/components/MethodologySection";
import { LearningSection } from "@/components/LearningSection";
import { AuthoritySection } from "@/components/AuthoritySection";
import { InstructorsSection } from "@/components/InstructorsSection";
import { CTASection } from "@/components/CTASection";
import { Footer } from "@/components/Footer";
import { CartModal } from "@/components/CartModal";
import { PaymentModal } from "@/components/PaymentModal";
import { RegistrationForm } from "@/components/RegistrationForm";
import { ConfirmationModal } from "@/components/ConfirmationModal";
import BlogSection from "@/components/BlogSection";

const Index = () => {
  const [isCartOpen, setIsCartOpen] = useState(false);
  const [isPaymentOpen, setIsPaymentOpen] = useState(false);
  const [isFormOpen, setIsFormOpen] = useState(false);
  const [isConfirmationOpen, setIsConfirmationOpen] = useState(false);
  const [requiresReceipt, setRequiresReceipt] = useState(false);

  const handleOpenCart = () => setIsCartOpen(true);
  const handleCloseCart = () => setIsCartOpen(false);

  const handleProceedToForm = () => {
    setIsCartOpen(false);
    setRequiresReceipt(false);
    setIsFormOpen(true);
  };

  const handleOpenPayment = () => {
    setIsCartOpen(false);
    setIsPaymentOpen(true);
  };

  const handleClosePayment = () => {
    setIsPaymentOpen(false);
  };

  const handlePaymentToForm = () => {
    setIsPaymentOpen(false);
    setRequiresReceipt(true);
    setIsFormOpen(true);
  };

  const handleFormSuccess = () => {
    setIsFormOpen(false);
    setIsConfirmationOpen(true);
  };

  const handleCloseConfirmation = () => {
    setIsConfirmationOpen(false);
    window.scrollTo({ top: 0, behavior: "smooth" });
  };

  return (
    <div className="min-h-screen bg-background text-foreground">
      <Header onOpenCart={handleOpenCart} />

      <main>
        <HeroSection onOpenCart={handleOpenCart} />
        <BlogSection />
        <MethodologySection />
        <LearningSection />
        <AuthoritySection />
        <InstructorsSection />
        <CTASection onOpenCart={handleOpenCart} />
      </main>

      <Footer />

      {/* Modals */}
      <CartModal
        isOpen={isCartOpen}
        onClose={handleCloseCart}
        onProceed={handleProceedToForm}
        onPayment={handleOpenPayment}
      />
      <PaymentModal
        isOpen={isPaymentOpen}
        onClose={handleClosePayment}
        onProceedToForm={handlePaymentToForm}
      />
      <RegistrationForm
        isOpen={isFormOpen}
        onClose={() => setIsFormOpen(false)}
        onSuccess={handleFormSuccess}
        requiresReceipt={requiresReceipt}
      />
      <ConfirmationModal
        isOpen={isConfirmationOpen}
        onClose={handleCloseConfirmation}
      />
    </div>
  );
};

export default Index;
